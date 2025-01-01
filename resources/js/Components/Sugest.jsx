import React from "react";
import { Form, Input, Button, Typography } from "antd";
const { Title, Text } = Typography;

export default function Suggest() {
    const onFinish = (values) => {
        const { name, email, suggestion } = values;
        const mailtoLink = `mailto:happyazondekon@gmail.com?subject=Nouvelle Suggestion&body=Nom: ${encodeURIComponent(name)}%0AEmail: ${encodeURIComponent(email)}%0A%0ASuggestion: ${encodeURIComponent(suggestion)}`;
        window.location.href = mailtoLink;
    };

    return (
        <section className="bg-gradient-to-br from-white via-green-50 to-green-100 py-16">
            <div className="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                <div className="bg-white shadow-xl rounded-xl p-8 border border-green-100">
                    <div className="text-center mb-8">
                        <Title
                            level={2}
                            className="text-4xl font-extrabold text-gray-900 mb-4"
                        >
                            Faire une Suggestion
                        </Title>
                        <Text
                            className="text-lg text-gray-600 block max-w-2xl mx-auto"
                        >
                            Votre voix est importante dans notre combat contre le changement climatique.
                            Partagez vos idées innovantes pour aider notre communauté à réduire
                            l'empreinte carbone et à construire un avenir plus durable.
                        </Text>
                    </div>

                    <Form
                        layout="vertical"
                        onFinish={onFinish}
                        className="space-y-6"
                    >
                        <Form.Item
                            label={<span className="text-green-900 font-semibold">Votre Nom</span>}
                            name="name"
                            rules={[{ required: true, message: "Veuillez entrer votre nom." }]}
                        >
                            <Input
                                placeholder="Entrez votre nom"
                                className="rounded-lg py-2 border-green-300 focus:border-green-500 focus:ring focus:ring-green-200"
                            />
                        </Form.Item>

                        <Form.Item
                            label={<span className="text-green-900 font-semibold">Votre Email</span>}
                            name="email"
                            rules={[
                                { required: true, message: "Veuillez entrer votre email." },
                                { type: "email", message: "Veuillez entrer un email valide." },
                            ]}
                        >
                            <Input
                                placeholder="Entrez votre email"
                                className="rounded-lg py-2 border-green-300 focus:border-green-500 focus:ring focus:ring-green-200"
                            />
                        </Form.Item>

                        <Form.Item
                            label={<span className="text-green-900 font-semibold">Suggestion</span>}
                            name="suggestion"
                            rules={[{ required: true, message: "Veuillez entrer votre suggestion." }]}
                        >
                            <Input.TextArea
                                rows={4}
                                placeholder="Décrivez votre idée ou suggestion"
                                className="rounded-lg border-green-300 focus:border-green-500 focus:ring focus:ring-green-200"
                            />
                        </Form.Item>

                        <Form.Item className="text-center">
                            <Button
                                type="primary"
                                htmlType="submit"
                                className="
                                    bg-green-600
                                    border-green-600
                                    hover:bg-green-700
                                    px-8
                                    py-3
                                    text-lg
                                    font-semibold
                                    rounded-lg
                                    transition-all
                                    duration-300
                                    ease-in-out
                                    transform
                                    hover:scale-105
                                    hover:shadow-lg
                                "
                            >
                                Envoyer la Suggestion
                            </Button>
                        </Form.Item>
                    </Form>
                </div>
            </div>
        </section>
    );
}
