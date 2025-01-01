import React from "react";
import { Typography, Button, Row, Col } from "antd";

const { Title, Text } = Typography;

export default function Hero() {
    return (
        <section className="bg-gradient-to-br from-white via-green-50 to-green-100">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <Row
                    align="middle"
                    gutter={[32, 32]}
                    className="flex items-center"
                >
                    {/* Left Section */}
                    <Col xs={24} md={12} className="space-y-6">
                        <Title
                            level={1}
                            className="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight"
                        >
                            Calculer. Réduire. Contribuer.
                        </Title>

                        <Text
                            className="text-lg text-gray-600 block leading-relaxed"
                        >
                            Maîtrisez votre empreinte carbone et contribuez au bien-être
                            planétaire. Découvrez votre impact environnemental grâce à notre
                            calculateur d'empreinte carbone personnalisé et recevez des
                            recommandations pratiques pour le réduire.
                        </Text>

                        <Button
                            type="primary"
                            size="large"
                            className="transition-all text-black duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg"
                            style={{
                                backgroundColor: "#3ACC86",
                                borderColor: "#3ACC86",
                                fontWeight: 600,
                                height: "48px",
                                borderRadius: "8px",
                            }}
                            href={route('calcul')}
                        >
                            Essayez maintenant
                        </Button>
                    </Col>

                    {/* Right Section */}
                    <Col xs={24} md={12}>
                        <div className="relative">
                            <img
                                src="/frontend/img/slider_img05.png"
                                draggable="false"
                                alt="Hero Section"
                                className="w-full rounded-xl transition-transform duration-300"
                            />
                        </div>
                    </Col>
                </Row>
            </div>
        </section>
    );
}
