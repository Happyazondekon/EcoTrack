import React from "react";
import { Typography, Row, Col } from "antd";
const { Title, Text, Paragraph } = Typography;

export default function Mission() {
    return (
        <section className="bg-gradient-to-br from-white via-green-50 to-green-100">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <Row
                    gutter={[32, 32]}
                    align="middle"
                    className="flex items-center"
                >
                    <Col xs={24} md={12} className="space-y-6">
                        <Title
                            level={2}
                            className="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight"
                        >
                            Notre Mission
                        </Title>
                        <Paragraph
                            className="text-lg text-gray-600 block leading-relaxed mb-6"
                        >
                            Dans l'échiquier complexe des défis environnementaux contemporains, notre mission s'articule autour d'une vision holistique et transformatrice de la réduction de l'empreinte carbone. Nous ne nous contentons pas de proposer un simple outil de calcul, mais nous ambitionnons de créer un mouvement global de conscientisation et d'action environnementale.

                            Notre approche est profondément ancrée dans la conviction que chaque individu, chaque organisation peut devenir un acteur significatif du changement climatique. Nous croyons en la puissance de la connaissance, de la technologie et de la collaboration comme leviers essentiels pour construire un avenir plus durable et résilient.
                        </Paragraph>
                    </Col>
                    <Col xs={24} md={12}>
                        <div className="relative">
                            <img
                                src="/frontend/img/usines-nobg-2.png"
                                draggable="false"
                                alt="Mission Illustration"
                                className="w-full rounded-xl transition-transform duration-300"
                            />
                        </div>
                    </Col>
                </Row>

                <Row gutter={[16, 16]} className="pb-16">
                    <Col xs={24} md={8}>
                        <div className="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                            <Title level={4} className="text-gray-900 mb-4">
                                Sensibilisation
                            </Title>
                            <Text className="text-gray-600">
                                Notre engagement premier réside dans la transformation de la conscience environnementale. Nous développons des outils éducatifs interactifs qui permettent à chaque individu de comprendre son impact réel sur l'environnement. À travers des visualisations intuitives, des analyses détaillées et des recommandations personnalisées, nous démystifions les concepts complexes du changement climatique et rendons la durabilité accessible à tous.
                            </Text>
                        </div>
                    </Col>
                    <Col xs={24} md={8}>
                        <div className="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                            <Title level={4} className="text-gray-900 mb-4">
                                Innovation
                            </Title>
                            <Text className="text-gray-600">
                                L'innovation technologique est au cœur de notre stratégie. Nous développons des solutions de pointe qui transforment les données environnementales complexes en informations pratiques et exploitables. Notre plateforme intègre des algorithmes avancés d'analyse de données, des modèles prédictifs et des technologies de machine learning pour offrir des insights précis et des recommandations contextualisées.
                            </Text>
                        </div>
                    </Col>
                    <Col xs={24} md={8}>
                        <div className="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                            <Title level={4} className="text-gray-900 mb-4">
                                Engagement
                            </Title>
                            <Text className="text-gray-600">
                                Nous croyons en la force des communautés et de la collaboration collective. Notre plateforme n'est pas qu'un outil, c'est un écosystème dynamique qui connecte des individus, des entreprises et des organisations partageant la vision d'un avenir plus vert. Nous facilitons le partage de connaissances, encourageons les initiatives locales et globales, et créons des synergies qui amplifient l'impact positif de chacun.
                            </Text>
                        </div>
                    </Col>
                </Row>
            </div>
        </section>
    );
}
