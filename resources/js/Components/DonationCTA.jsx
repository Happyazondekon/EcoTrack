import React from 'react';
import { Row, Col, Typography, Button } from 'antd';
import { HeartOutlined } from '@ant-design/icons';

const DonationCTA = () => {
    return (
        <section className="bg-gray-50 py-16 px-6">
            <div className="max-w-screen-xl mx-auto">
                <Row gutter={[32, 32]} align="middle">
                    <Col xs={24} md={12}>
                        <img
                            src="https://www.buzzwebzine.fr/wp-content/uploads/2022/09/donation-dons-ecologie-environnement-patron-patagonia-1-1024x576.jpg"
                            alt="Support Our Project"
                            className="w-full rounded-lg shadow-lg object-cover"
                        />
                    </Col>
                    <Col xs={24} md={12}>
                        <Typography.Title
                            level={2}
                            className="mb-4 text-gray-900"
                        >
                            Soutenez Notre Projet
                        </Typography.Title>
                        <Typography.Paragraph
                            className="text-gray-600 text-base mb-6"
                        >
                            Votre soutien nous aide à continuer d'innover et de créer des solutions technologiques qui font la différence. Chaque contribution compte.
                        </Typography.Paragraph>
                        <Button
                            type="primary"
                            size="large"
                            icon={<HeartOutlined />}
                            className="transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg"
                            style={{
                                backgroundColor: "#3ACC86",
                                borderColor: "#3ACC86",
                                fontWeight: 600,
                                height: "48px",
                                borderRadius: "8px",
                            }}
                            href="/donation"  // Lien vers la page Donation
                        >
                            Faire un Don
                        </Button>
                    </Col>
                </Row>
            </div>
        </section>
    );
};

export default DonationCTA;
