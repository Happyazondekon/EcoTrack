import React, { useState } from 'react';
import { Tabs, Typography } from 'antd';
import { Head } from '@inertiajs/react';
import Transport from '@/Components/ImpactCO2Widget';
import Food from '@/Components/Food';
import Chauffage from '@/Components/Chauffage';
import Recommendation from '@/Components/Recommendation';
import Seasonal from '@/Components/Seasonal';
import AppLayout from '@/Layouts/AppLayout';


const { Title } = Typography;

const CarbonImpactCalculator = () => {
    const [activeTab, setActiveTab] = useState('transport');

    const tabItems = [
        {
            key: 'transport',
            label: 'Transport',
            children: <Transport />
        },
        {
            key: 'food',
            label: 'Alimentation',
            children: <Food />
        },
        {
            key: 'heating',
            label: 'Chauffage',
            children: <Chauffage />
        },
        {
            key: 'seasonal-produce',
            label: 'Fruits et Légumes',
            children: <Seasonal />
        }
    ];

    return (
        <AppLayout>
            <Head title="Impact CO₂ Calculateur" />
            <section className="bg-gradient-to-br from-white via-green-50 to-green-100">

                <div
                    style={{
                        // minHeight: '100vh',
                        padding: '40px',
                        display: 'flex',
                        justifyContent: 'center',
                        alignItems: 'center',
                    }}
                >
                    <div
                        style={{
                            minHeight: '80vh',
                            maxWidth: '1000px',
                            width: '100%',
                            background: 'white',
                            borderRadius: '12px',
                            boxShadow: '0 6px 20px rgba(0, 0, 0, 0.1)',
                            padding: '30px',
                        }}
                    >
                        <Title
                            level={2}
                            style={{
                                color: '#3ACC86',
                                textAlign: 'center',
                                marginBottom: '30px'
                            }}
                        >
                            Impact CO₂ Calculateur
                        </Title>

                        <Tabs
                            defaultActiveKey="transport"
                            centered
                            items={tabItems}
                            onChange={setActiveTab}
                        />
                        {/* Section Recommandations */}
                        <Recommendation category={activeTab} score={50} />
                    </div>
                </div>
            </section>
        </AppLayout>
    );
};

export default CarbonImpactCalculator;
