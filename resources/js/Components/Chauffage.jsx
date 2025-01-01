import React, { useState } from 'react';
import { Form, InputNumber, Select, Table, Typography, Card, Alert, Spin } from 'antd';

const { Title, Text } = Typography;

const Chauffage = () => {
    const [data, setData] = useState([]);
    const [loading, setLoading] = useState(false);
    const [error, setError] = useState(null);

    const heatingTypes = [
        { id: '1', name: 'Chauffage au gaz' },
        { id: '2', name: 'Chauffage au fioul' },
        { id: '3', name: 'Chauffage électrique' },
        { id: '4', name: 'Pompe à chaleur' },
        { id: '5', name: 'Poêle à granulés' },
        { id: '6', name: 'Poêle à bois' },
        { id: '7', name: 'Réseau de chaleur' }
    ];

    const handleSubmit = async (values) => {
        setLoading(true);
        setError(null);

        try {
            const response = await fetch(`/api/heating/calculate?m2=${values.m2}&chauffages=${values.heatingTypes.join(',')}`, {
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
            title: 'Type de chauffage',
            dataIndex: 'name',
            key: 'name',
        },
        {
            title: 'Émissions de CO2 (kg/an)',
            dataIndex: 'ecv',
            key: 'ecv',
            render: (value) => value.toFixed(2)
        },
    ];

    return (
        <Card
            style={{
                borderRadius: '8px',
                boxShadow: '0 4px 12px rgba(0, 0, 0, 0.1)',
                padding: '24px',
            }}
        >
            <Title level={3} style={{ color: '#3ACC86', textAlign: 'center' }}>
                Émissions Carbone du Chauffage
            </Title>
            <Text style={{ display: 'block', textAlign: 'center', marginBottom: '20px' }}>
                Calculez les émissions de CO2 de votre chauffage par m²
            </Text>

            <Form
                layout="vertical"
                onFinish={handleSubmit}
                style={{ maxWidth: '600px', margin: '0 auto' }}
            >
                <Form.Item
                    name="m2"
                    label="Surface en m²"
                    rules={[
                        { required: true, message: 'Veuillez entrer la surface!' },
                        {
                            validator: (_, value) =>
                                value > 0 ? Promise.resolve() : Promise.reject('Surface doit être positive')
                        }
                    ]}
                >
                    <InputNumber
                        placeholder="Surface en m²"
                        style={{ width: '100%' }}
                        min={1}
                        max={500}
                    />
                </Form.Item>

                <Form.Item
                    name="heatingTypes"
                    label="Types de chauffage"
                    rules={[{ required: true, message: 'Sélectionnez au moins un type de chauffage!' }]}
                >
                    <Select
                        mode="multiple"
                        placeholder="Sélectionner les types de chauffage"
                        style={{ width: '100%' }}
                    >
                        {heatingTypes.map(type => (
                            <Select.Option key={type.id} value={type.id}>
                                {type.name}
                            </Select.Option>
                        ))}
                    </Select>
                </Form.Item>

                <Form.Item style={{ textAlign: 'center' }}>
                    <button
                        type="submit"
                        style={{
                            backgroundColor: '#3ACC86',
                            borderColor: '#3ACC86',
                            color: '#fff',
                            padding: '8px 24px',
                            borderRadius: '4px',
                        }}
                    >
                        Calculer
                    </button>
                </Form.Item>
            </Form>

            {error && (
                <Alert
                    message={error}
                    type="error"
                    showIcon
                    style={{ marginBottom: '20px' }}
                />
            )}

            {loading && <Spin style={{ display: 'block', margin: '20px auto' }} />}

            {data.length > 0 && (
                <Table
                    columns={columns}
                    dataSource={data}
                    pagination={false}
                    rowKey="slug"
                />
            )}
        </Card>
    );
};

export default Chauffage;
