import React, {
    useState,
} from 'react';
import { Form, Input, Button, Card, Row, Col, Steps, message, Typography } from 'antd';
import { UserOutlined, TeamOutlined, SolutionOutlined } from '@ant-design/icons';
import { useForm, Link } from '@inertiajs/react';

const { Title, Text } = Typography;
const { Step } = Steps;

// Custom theme colors
const theme = {
    primary: '#3ACC86', // Forest green
    admin: '#1890ff',
    auteur: '#52c41a',
    utilisateur: '#faad14',
    background: '#F5F8F5', // Soft green-white
    text: '#1C2833',
};

const roles = [
    {
        key: 'Administrateur',
        role_id: 2,
        icon: <TeamOutlined style={{ fontSize: '2.5em', color: theme.admin }} />,
        title: 'Administrateur',
        description: 'Gérer et superviser les opérations de la plateforme, la gestion des utilisateurs et les configurations du système.',
    },
    {
        key: 'Auteur',
        role_id: 3,
        icon: <SolutionOutlined style={{ fontSize: '2.5em', color: theme.auteur }} />,
        title: 'Auteur',
        description: 'Créer, publier et gérer du contenu sur la plateforme.',
    },
    {
        key: 'Utilisateur',
        role_id: 1,
        icon: <UserOutlined style={{ fontSize: '2.5em', color: theme.utilisateur }} />,
        title: 'Utilisateur',
        description: 'Explorer et interagir avec les fonctionnalités de la plateforme en tant qu\'utilisateur standard.',
    },
];

const RegisterPage = () => {
    const [currentStep, setCurrentStep] = useState(0);
    const [roleId, setRoleId] = useState(null);
    const [form] = Form.useForm();

    const { data, setData, post, processing, errors, reset } = useForm({
        name: '',
        prenom: '',
        email: '',
        password: '',
        password_confirmation: '',
        role_id: null
    });

    const handleRoleSelect = (selectedRoleId) => {
        setData('role_id', selectedRoleId);
        setRoleId(selectedRoleId);
        setCurrentStep(1);
    };

    const handleBackToRoleSelection = () => {
        setRoleId(null);
        setCurrentStep(0);
    };

    const handleRegisterSubmit = (values) => {
        post(route('register'), {
            onSuccess: () => message.success('Registration successful!'),
            onError: (errors) => message.error('There was an error during registration.'),
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

    const IntentSelectionStep = () => (
        <div className="w-full py-16">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <Title
                    level={1}
                    className="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight text-center mb-6"
                >
                    Comment comptez-vous utiliser notre plateforme ?
                </Title>

                <Text
                    className="text-lg text-gray-600 block text-center leading-relaxed mb-12"
                >
                    Veuillez sélectionner le profil qui correspond le mieux à l'utilisation que vous ferez de notre plateforme
                </Text>
                <Row gutter={[32, 32]} justify="center">
                    {roles.map(({ role_id, icon, title, description }) => (
                        <Col xs={24} sm={12} md={8} key={role_id} className="flex">
                            <Card
                                hoverable
                                onClick={() => handleRoleSelect(role_id)}
                                className="
                                    flex flex-col items-center justify-between
                                    w-full text-center transition-all duration-300
                                    border border-gray-200 rounded-lg
                                    hover:border-green-500
                                    hover:scale-[1.02]
                                "
                                bodyStyle={{
                                    display: 'flex',
                                    flexDirection: 'column',
                                    alignItems: 'center',
                                    justifyContent: 'space-between',
                                    height: '100%',
                                    padding: '24px'
                                }}
                            >
                                {icon}
                                <div>
                                    <Title level={4} className="mt-4 text-gray-900 font-semibold" >
                                        {title}
                                    </Title>
                                    <Text
                                        type="secondary"
                                        className="text-center text-gray-600 mt-2"
                                    >
                                        {description}
                                    </Text>
                                </div>
                            </Card>
                        </Col>
                    ))}
                </Row>
            </div>

            {/* Add the button here */}
            <div className="mt-8 flex justify-center">
                <Button
                    type="primary"
                    size="large"
                    href={route('home')}
                    className="bg-blue-500 text-white rounded-lg px-6 py-2"
                >
                    Retour à l'accueil
                </Button>
            </div>
        </div>
    );

    const formRules = {
        name: [
            { required: true, message: 'Veuillez entrer votre nom!' },
            { min: 2, message: 'Le nom doit contenir au moins 2 caractères' }
        ],
        prenom: [
            { required: true, message: 'Veuillez entrer votre prénom!' },
            { min: 2, message: 'Le prénom doit contenir au moins 2 caractères' }
        ],
        email: [
            { required: true, message: 'Veuillez entrer votre email!' },
            { type: 'email', message: 'Veuillez entrer un email valide' }
        ],
        password: [
            { required: true, message: 'Veuillez créer un mot de passe!' },
            { min: 8, message: 'Le mot de passe doit contenir au moins 8 caractères' }
        ],
        password_confirmation: [
            { required: true, message: 'Veuillez confirmer le mot de passe!' },
            ({ getFieldValue }) => ({
                validator(_, value) {
                    if (!value || getFieldValue('password') === value) {
                        return Promise.resolve();
                    }
                    return Promise.reject(new Error('Les deux mots de passe ne sont pas identiques'));
                },
            }),
        ]
    };

    return (
        <div className='min-h-screen bg-gradient-to-br from-white via-green-50 to-green-100 flex items-center justify-center'>  {/* Added py-16 for vertical padding */}
            <div className="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                {/* <Steps */}
                {/*     current={currentStep} */}
                {/*     className="mb-12 max-w-2xl mx-auto" */}
                {/*     style={{ marginBottom: '2rem' }} */}
                {/*     progressDot */}
                {/*     items={[ */}
                {/*         { title: 'Préciser utilisation' }, */}
                {/*         { title: 'Renseigner informations' } */}
                {/*     ]} */}
                {/* /> */}

                {currentStep === 0 && <IntentSelectionStep />}

                {currentStep === 1 && (
                    <div className="max-w-lg mx-auto">
                        <Form
                            form={form}
                            onFinish={handleRegisterSubmit}
                            layout="vertical"
                            className="bg-white p-8 rounded-lg border border-gray-200"
                        >
                            <Row gutter={16}>
                                <Col span={12}>
                                    <Form.Item
                                        name="name"
                                        label="Nom"
                                        validateStatus={errors.name ? 'error' : ''}
                                        rules={formRules.name}
                                    >
                                        <Input
                                            value={data.name}
                                            onChange={(e) => setData('name', e.target.value)}
                                            size="large"
                                        />
                                    </Form.Item>
                                </Col>
                                <Col span={12}>
                                    <Form.Item
                                        name="prenom"
                                        label="Prénom"
                                        validateStatus={errors.prenom ? 'error' : ''}
                                        rules={formRules.prenom}
                                    >
                                        <Input
                                            value={data.prenom}
                                            onChange={(e) => setData('prenom', e.target.value)}
                                            size="large"
                                        />
                                    </Form.Item>
                                </Col>
                            </Row>

                            <Form.Item
                                name="email"
                                label="Email"
                                rules={formRules.email}
                            >
                                <Input
                                    value={data.email}
                                    onChange={(e) => setData('email', e.target.value)}
                                    validateStatus={errors.email ? 'error' : ''}
                                    size="large"
                                />
                            </Form.Item>

                            <Form.Item
                                name="password"
                                label="Mot de passe"
                                rules={formRules.password}
                            >
                                <Input.Password
                                    value={data.password}
                                    onChange={(e) => setData('password', e.target.value)}
                                    validateStatus={errors.password ? 'error' : ''}
                                    size="large"
                                />
                            </Form.Item>

                            <Form.Item
                                name="password_confirmation"
                                label="Confirmer mot de passe"
                                rules={formRules.password_confirmation}
                            >
                                <Input.Password
                                    value={data.password_confirmation}
                                    onChange={(e) => setData('password_confirmation', e.target.value)}
                                    validateStatus={errors.password_confirmation ? 'error' : ''}
                                    size="large"
                                />
                            </Form.Item>

                            <Form.Item>
                                <div className="flex flex-col space-y-4">
                                    <Button
                                        onClick={handleBackToRoleSelection}
                                        style={{ ...buttonStyle, backgroundColor: 'white', color: theme.primary }}
                                    >
                                        Revenir en arrrière
                                    </Button>
                                    <Button
                                        type="primary"
                                        htmlType="submit"
                                        className="w-full"
                                        style={{
                                            ...buttonStyle,
                                            ':hover': {
                                                opacity: 0.9,
                                                transform: 'translateY(-2px)'
                                            }
                                        }}
                                        loading={processing}
                                    >
                                        S'inscrire
                                    </Button>
                                    <div className="text-center">
                                        <Text className="mr-2">
                                            Vous posséder déjà un compte?
                                        </Text>
                                        <Link
                                            href={route('login')}
                                            className="text-green-600 hover:text-green-800 transition-colors"
                                        >
                                            Se connecter
                                        </Link>
                                    </div>
                                </div>
                            </Form.Item>
                        </Form>
                    </div>
                )}
            </div>
        </div>
    );
};

export default RegisterPage;
