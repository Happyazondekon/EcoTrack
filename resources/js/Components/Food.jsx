import React, { useState } from 'react';
import { Form, Select, Table, Typography, Card, Alert, Spin, InputNumber, Input } from 'antd';

const { Title, Text } = Typography;

const Food = () => {
    const [data, setData] = useState([]);
    const [loading, setLoading] = useState(false);
    const [error, setError] = useState(null);

    const foodCategories = [
        { value: 'group', label: 'Groupe d\'aliments' },
        { value: 'rayon', label: 'Rayons du magasin' },
        { value: 'popularity', label: 'Les plus populaires' },
    ];

    const handleSubmit = async (values) => {
        setLoading(true);
        setError(null);

        try {
            const response = await fetch(`/api/food/calculate?category=${values.category}`, {
                headers: { 'X-Requested-With': 'XMLHttpRequest' },
            });

            const jsonData = await response.json();
            if (!response.ok) {
                throw new Error(jsonData.warning || 'Failed to fetch data.');
            }

            // Map data and ensure `multiplier` and `multipliedEcv` are initialized
            const updatedData = jsonData.data.map(category => ({
                ...category,
                items: category.items.map(item => ({
                    ...item,
                    multiplier: 1, // Default multiplier
                    multipliedEcv: item.ecv || 0, // Ensure `multipliedEcv` is set, even if `ecv` is missing
                })),
            }));

            setData(updatedData);
        } catch (err) {
            console.error('Error:', err);
            setError(err.message);
        } finally {
            setLoading(false);
        }
    };


    const updateMultiplier = (item, multiplier, categoryIndex, itemIndex) => {
        const newData = [...data];
        const category = newData[categoryIndex];
        const updatedItem = {
            ...item,
            multiplier,
            multipliedEcv: item.ecv ? item.ecv * multiplier : 0 // Ensure a valid calculation
        };

        category.items[itemIndex] = updatedItem;
        newData[categoryIndex] = category;
        setData(newData);
    };


    const columns = [
        {
            title: 'Catégorie',
            dataIndex: 'name',
            key: 'name',
        },
        {
            title: 'Émissions de CO2 (kg/kg)',
            dataIndex: 'items',
            key: 'items',
            render: (_, record, categoryIndex) => (
                <div>
                    {record.items.map((item, itemIndex) => (
                        <div key={item.slug} style={{ marginBottom: '8px', display: 'flex', alignItems: 'center', gap: '10px' }}>
                            <div style={{ flex: 1 }}>
                                <strong>
                                    {String(item.slug).charAt(0).toUpperCase() +
                                        String(item.slug).slice(1)}
                                </strong>{' '}
                                {item.ecv ? item.ecv.toFixed(2) : 'N/A'} kg CO₂
                            </div>
                            <InputNumber
                                min={1}
                                defaultValue={item.multiplier}
                                onChange={(value) => updateMultiplier(item, value || 1, categoryIndex, itemIndex)}
                                style={{ width: '100px' }}
                            />
                            <Input
                                value={item.multipliedEcv ? item.multipliedEcv.toFixed(2) : 'N/A'}
                                readOnly
                                style={{ width: '120px' }}
                            />
                        </div>
                    ))}
                </div>
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
                Émissions Carbone Alimentaires
            </Title>
            <Text style={{ display: 'block', textAlign: 'center', marginBottom: '20px' }}>
                Sélectionnez une catégorie pour voir les émissions de CO2 par type d'aliment
            </Text>

            <Form
                layout="inline"
                onFinish={handleSubmit}
                style={{ justifyContent: 'center', marginBottom: '24px' }}
            >
                <Form.Item
                    name="category"
                    rules={[{ required: true, message: 'Veuillez choisir une catégorie!' }]}
                >
                    <Select
                        placeholder="Choisir une catégorie"
                        style={{ width: '250px' }}
                    >
                        {foodCategories.map(cat => (
                            <Select.Option key={cat.value} value={cat.value}>
                                {cat.label}
                            </Select.Option>
                        ))}
                    </Select>
                </Form.Item>
                <Form.Item>
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

export default Food;
