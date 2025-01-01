import React from 'react';
import { Form, Input, Button, Card, Typography, message } from 'antd';
import { MailOutlined, LockOutlined } from '@ant-design/icons';
import { useForm, Link } from '@inertiajs/react';

const { Title, Text } = Typography;

const theme = {
    primary: '#3ACC86', // Forest green
    background: '#F5F8F5', // Soft green-white
    text: '#1C2833',
};

const LoginPage = () => {
    const { data, setData, post, processing, errors } = useForm({
        email: '',
        password: '',
    });

    const handleLoginSubmit = () => {
        post(route('login'), {
            onSuccess: () => message.success('Connexion réussi!'),
            onError: () => message.error('Informations incorrectes. Veuillez réessayer.'),
        });
    };

    const buttonStyle = {
        backgroundColor: theme.primary,
        borderColor: theme.primary,
        color: 'white',
        borderRadius: '4px',
        height: '40px',
        padding: '0 2rem',
        transition: 'all 0.3s ease',
    };

    return (
        <div className="min-h-screen bg-gradient-to-br from-white via-green-50 to-green-100 flex items-center justify-center">
            <div className="max-w-md w-full px-4">
                <Card className="p-8 rounded-lg border border-gray-200">
                    <Title level={2} className="text-center mb-6" style={{ color: theme.text }}>
                        Se connecter
                    </Title> <Form layout="vertical"
                        onFinish={handleLoginSubmit}
                    >
                        <Form.Item
                            name="email"
                            label="Email"
                            validateStatus={errors.email ? 'error' : ''}
                            help={errors.email}
                            rules={[
                                { required: true, message: 'Veuillez entrer votre email!' },
                                { type: 'email', message: 'Veuillez entrer un email valide' },
                            ]}
                        >
                            <Input
                                prefix={<MailOutlined />}
                                value={data.email}
                                onChange={(e) => setData('email', e.target.value)}
                                placeholder="Entrez votre email"
                                size="large"
                            />
                        </Form.Item>

                        <Form.Item
                            name="password"
                            label="Mot de passe"
                            validateStatus={errors.password ? 'error' : ''}
                            help={errors.password}
                            rules={[
                                { required: true, message: 'Veuillez entrer votre mot de passe!' },
                            ]}
                        >
                            <Input.Password
                                prefix={<LockOutlined />}
                                value={data.password}
                                onChange={(e) => setData('password', e.target.value)}
                                placeholder="Entrez votre mot de passe"
                                size="large"
                            />
                        </Form.Item>

                        <Form.Item>
                            <Button
                                type="primary"
                                htmlType="submit"
                                className="w-full"
                                style={buttonStyle}
                                loading={processing}
                            >
                                Se connecter
                            </Button>
                        </Form.Item>
                    </Form>
                    <div className="text-center mt-4">
                        <Text className="mr-2">Vous n'avez pas de compte ?</Text>
                        <Link
                            href={route('register')}
                            className="text-green-600 hover:text-green-800 transition-colors"
                        >
                            S'inscrire
                        </Link>
                    </div>
                </Card>
            </div>
        </div>
    );
};

export default LoginPage;
