import React from "react";
import { Card, Avatar, Typography, Row, Col } from "antd";

const { Title, Text } = Typography;
const { Meta } = Card;

const authors = [
    {
        name: "Jane Doe",
        description: "Spécialiste en énergies renouvelables et auteur de plusieurs ouvrages sur le développement durable.",
        avatar: "https://i.pravatar.cc/150?img=1",
    },
    {
        name: "John Smith",
        description: "Ingénieur en écologie et conférencier sur la réduction de l'empreinte carbone.",
        avatar: "https://i.pravatar.cc/150?img=2",
    },
    {
        name: "Alice Johnson",
        description: "Journaliste environnementale et activiste pour la préservation des forêts tropicales.",
        avatar: "https://i.pravatar.cc/150?img=3",
    },
];

export default function Pauthor() {
    return (
        <div className="mt-16 px-4 sm:px-6 lg:px-8">
            <div className="max-w-7xl mx-auto">
                <Title level={2} className="text-3xl font-bold text-gray-800 mb-8 text-center">
                    Auteurs Populaires
                </Title>
                <Row gutter={[16, 16]}>
                    {authors.map((author, index) => (
                        <Col key={index} xs={24} sm={12} md={8}>
                            <Card
                                hoverable
                                cover={<Avatar src={author.avatar} size={150} className="mx-auto mt-4 rounded-full" />}
                                className="text-center shadow-md transition-transform duration-300 hover:scale-105 rounded-lg"
                            >
                                <Meta
                                    title={<Text className="font-bold text-lg text-green-600">{author.name}</Text>}
                                    description={<Text className="text-gray-600">{author.description}</Text>}
                                />
                            </Card>
                        </Col>
                    ))}
                </Row>
            </div>
        </div>
    );
}
