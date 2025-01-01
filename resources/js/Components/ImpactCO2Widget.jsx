import React, { useState } from 'react';
import { Form, Input, Button, Table, Typography, Alert, Card, Spin } from 'antd';

const { Title, Text } = Typography;

const Transport = () => {
    const [data, setData] = useState([]);
    const [loading, setLoading] = useState(false);
    const [error, setError] = useState(null);
    const [form] = Form.useForm();

    const handleSubmit = async (values) => {
        const kilometers = parseFloat(values.kilometers);

        if (isNaN(kilometers) || kilometers < 0) {
            setError('Please enter a valid positive number.');
            return;
        }

        setLoading(true);
        setError(null);

        try {
            const response = await fetch(`/api/transport/calculate?kilometers=${kilometers}`, {
                headers: { 'X-Requested-With': 'XMLHttpRequest' },
            });

            const jsonData = await response.json();
            if (!response.ok) throw new Error(jsonData.error || 'Failed to fetch data.');

            setData(jsonData.data);
        } catch (err) {
            console.error('Error:', err);
            setError(err.message);
        } finally {
            setLoading(false);
        }
    };

    const columns = [
        {
            title: 'Moyen de transport',
            dataIndex: 'name',
            key: 'name',
        },
        {
            // title: 'CO2 Emissions (kg)',
            title: 'Emission de CO2 (kg)',
            dataIndex: 'value',
            key: 'value',
            render: (value) => value.toFixed(3),
        },
    ];

    return (
            <Card
                style={{
                    // maxWidth: '800px',
                    width: '100%',
                    borderRadius: '8px',
                    boxShadow: '0 4px 12px rgba(0, 0, 0, 0.1)',
                    padding: '24px',
                }}
            >
                <Title level={2} style={{ color: '#3ACC86', textAlign: 'center' }}>
                    Calculateur de l'empreinte carbone de la distance
                </Title>
                <Text style={{ display: 'block', textAlign: 'center', marginBottom: '20px' }}>
                    Entrez le nombre de kilomètres pour calculer les émissions
                    de carbone pour les différents modes de transport.
                </Text>

                <Form
                    form={form}
                    layout="inline"
                    onFinish={handleSubmit}
                    style={{ justifyContent: 'center', marginBottom: '24px' }}
                >
                    <Form.Item
                        name="kilometers"
                        rules={[
                            { required: true, message: 'Veuillez entrer le nombre de kilomètres!' },
                            {
                                validator: (_, value) => {
                                    const num = parseFloat(value);
                                    if (isNaN(num)) return Promise.reject('Veuillez entrer un nombre valide.');
                                    if (num < 0) return Promise.reject('Veuillez entrer un nombre positif.');
                                    return Promise.resolve();
                                },
                            },
                        ]}
                    >
                        <Input
                            type="number"
                            placeholder="Distance parcourue"
                            step="any"
                            min="0"
                            style={{ width: '200px' }}
                        />
                    </Form.Item>
                    <Form.Item>
                        <Button
                            type="primary"
                            htmlType="submit"
                            loading={loading}
                            style={{
                                backgroundColor: '#3ACC86',
                                borderColor: '#3ACC86',
                                color: '#fff',
                                padding: '0 24px',
                            }}
                        >
                            Calculer
                        </Button>
                    </Form.Item>
                </Form>

                {error && (
                    <Alert
                        message={error}
                        type="error"
                        showIcon
                        style={{
                            marginBottom: '20px',
                        }}
                    />
                )}

                {loading && <Spin style={{ display: 'block', margin: '20px auto' }} />}

                {data.length > 0 && (
                    <Table
                        columns={columns}
                        dataSource={data}
                        pagination={false}
                        rowKey="name"
                        style={{ marginTop: '20px' }}
                    />
                )}
            </Card>
    );
};

export default Transport;
