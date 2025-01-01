import React, { useState } from 'react';
import { Form, Select, Table, Typography, Card, Alert, Spin, InputNumber, Input } from 'antd';
import dayjs from 'dayjs';

const { Title, Text } = Typography;

const Seasonal = () => {
    const [data, setData] = useState([]);
    const [loading, setLoading] = useState(false);
    const [error, setError] = useState(null);

    const produceCategories = [
        { value: '1', label: 'Fruits' },
        { value: '2', label: 'Légumes' },
        { value: '3', label: 'Herbes' },
        { value: '4', label: 'Pâtes, riz et céréales' },
        { value: '5', label: 'Pommes de terre et tubercules' },
        { value: '6', label: 'Fruits à coque et graines' },
    ];

    const monthOptions = [
        { value: 1, label: 'Janvier' },
        { value: 2, label: 'Février' },
        { value: 3, label: 'Mars' },
        { value: 4, label: 'Avril' },
        { value: 5, label: 'Mai' },
        { value: 6, label: 'Juin' },
        { value: 7, label: 'Juillet' },
        { value: 8, label: 'Août' },
        { value: 9, label: 'Septembre' },
        { value: 10, label: 'Octobre' },
        { value: 11, label: 'Novembre' },
        { value: 12, label: 'Décembre' },
    ];

    const handleSubmit = async (values) => {
        setLoading(true);
        setError(null);

        const monthToUse = values.month || dayjs().month() + 1;

        try {
            const response = await fetch(`/api/seasonal-produce/calculate?month=${monthToUse}&category=${values.category}`, {
                headers: { 'X-Requested-With': 'XMLHttpRequest' },
            });

            const jsonData = await response.json();
            if (!response.ok) throw new Error(jsonData.error || 'Failed to fetch data.');

            // Initialize multiplier and multipliedEcv for all items
            const updatedData = jsonData.data.map(item => ({
                ...item,
                multiplier: 1,
                multipliedEcv: item.ecv || 0,
            }));

            setData(updatedData);
        } catch (err) {
            console.error('Error:', err);
            setError(err.message);
        } finally {
            setLoading(false);
        }
    };

    const updateMultiplier = (itemIndex, multiplier) => {
        const newData = [...data];
        const updatedItem = {
            ...newData[itemIndex],
            multiplier,
            multipliedEcv: newData[itemIndex] ? newData[itemIndex].ecv * multiplier : 0,
        };
        newData[itemIndex] = updatedItem;
        setData(newData);
    };

    const columns = [
        {
            title: 'Produit',
            dataIndex: 'name',
            key: 'name',
        },
        {
            title: 'Émissions de CO2 (kg)',
            dataIndex: 'ecv',
            key: 'ecv',
            render: (value) => value.toFixed(3),
        },
        {
            title: 'Mois de saison',
            dataIndex: 'months',
            key: 'months',
            render: (months) => {
                const monthNames = [
                    'Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin',
                    'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Dec',
                ];
                return months.map((m) => monthNames[m - 1]).join(', ');
            },
        },
        {
            title: 'Multiplier',
            key: 'multiplier',
            render: (_, record, index) => (
                <InputNumber
                    min={1}
                    value={record.multiplier}
                    onChange={(value) => updateMultiplier(index, value || 1)}
                    style={{ width: '80px' }}
                />
            ),
        },
        {
            title: 'CO2 Total (kg)',
            key: 'multipliedEcv',
            render: (_, record) => (
                <Input
                    value={record.multipliedEcv.toFixed(3)}
                    readOnly
                    style={{ width: '120px', textAlign: 'center' }}
                />
            ),
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
                Empreinte Carbone des Produits de Saison
            </Title>
            <Text style={{ display: 'block', textAlign: 'center', marginBottom: '20px' }}>
                Sélectionnez une catégorie et un mois pour voir les émissions de CO2
            </Text>

            <Form
                layout="inline"
                onFinish={handleSubmit}
                style={{ justifyContent: 'center', marginBottom: '24px' }}
            >
                <Form.Item
                    name="category"
                    rules={[{ required: true, message: 'Veuillez choisir une catégorie!' }]}
                    style={{ marginBottom: '12px' }}
                >
                    <Select
                        placeholder="Choisir une catégorie"
                        style={{ width: '250px' }}
                    >
                        {produceCategories.map((cat) => (
                            <Select.Option key={cat.value} value={cat.value}>
                                {cat.label}
                            </Select.Option>
                        ))}
                    </Select>
                </Form.Item>
                <Form.Item name="month" style={{ marginBottom: '12px' }}>
                    <Select
                        placeholder="Choisir un mois (optionnel)"
                        style={{ width: '200px' }}
                        allowClear
                    >
                        {monthOptions.map((month) => (
                            <Select.Option key={month.value} value={month.value}>
                                {month.label}
                            </Select.Option>
                        ))}
                    </Select>
                </Form.Item>
                <Form.Item style={{ marginBottom: '12px' }}>
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
                    rowKey="name"
                />
            )}
        </Card>
    );
};

export default Seasonal;
