import React, { useState } from 'react';
import { Card, Input, Button, Radio, Typography, Checkbox, Alert } from 'antd';

const { Title, Text } = Typography;

const Fdons = () => {
    const [donationFrequency, setDonationFrequency] = useState('unique');
    const [selectedAmount, setSelectedAmount] = useState(null);
    const [customAmount, setCustomAmount] = useState('');
    const [tribute, setTribute] = useState(false);
    const [message, setMessage] = useState('');
    const [success, setSuccess] = useState(false);

    const predefinedAmounts = [
        { value: 24, label: 'Planter 6 arbres' },
        { value: 50, label: 'Soutenir un projet local' },
        { value: 100, label: 'Contribuer à la transition écologique' },
    ];

    const handleDonate = () => {
        const amount = customAmount ? parseFloat(customAmount) : selectedAmount;
        if (!amount || isNaN(amount) || amount <= 0) {
            alert('Veuillez entrer un montant valide.');
            return;
        }

        // Simuler une action de paiement (Stripe ou PayPal)
        console.log({
            frequency: donationFrequency,
            amount,
            tribute,
            message,
        });

        // Réinitialiser le formulaire après le paiement
        setSuccess(true);
        setDonationFrequency('unique');
        setSelectedAmount(null);
        setCustomAmount('');
        setTribute(false);
        setMessage('');
    };

    return (
        <div className="max-w-screen-md mx-auto py-8 px-4 lg:px-8 bg-white rounded-lg shadow-md">
            <Title level={2} className="text-center text-green-600 mb-6 text-2xl font-bold">
                Aidez-nous à réduire l'empreinte carbone
            </Title>

            {success && (
                <Alert
                    message="Merci pour votre générosité ! Votre don a bien été enregistré."
                    type="success"
                    showIcon
                    closable
                    className="mb-6"
                />
            )}

            <div className="mb-6">
                <Text strong className="block mb-2">Fréquence du don :</Text>
                <Radio.Group
                    value={donationFrequency}
                    onChange={(e) => setDonationFrequency(e.target.value)}
                >
                    <Radio value="unique">Don unique</Radio>
                    <Radio value="mensuel">Mensuel</Radio>
                    <Radio value="annuel">Annuel</Radio>
                </Radio.Group>
            </div>

            <div className="mb-6">
                <Text strong className="block mb-2">Choisissez un montant :</Text>
                <div className="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    {predefinedAmounts.map((item) => (
                        <Card
                            key={item.value}
                            className={`cursor-pointer ${
                                selectedAmount === item.value
                                    ? 'border-green-600'
                                    : 'border-gray-200'
                            }`}
                            onClick={() => {
                                setSelectedAmount(item.value);
                                setCustomAmount('');
                            }}
                            bordered
                        >
                            <Title level={4} className="text-center text-green-600">
                                ${item.value}
                            </Title>
                            <Text className="block text-center">{item.label}</Text>
                        </Card>
                    ))}
                </div>
            </div>

            <div className="mb-6">
                <Text strong className="block mb-2">Montant personnalisé :</Text>
                <Input
                    type="number"
                    placeholder="Entrez un montant"
                    value={customAmount}
                    onChange={(e) => {
                        setCustomAmount(e.target.value);
                        setSelectedAmount(null);
                    }}
                    prefix="$"
                    className="rounded-lg"
                />
            </div>

            <div className="mb-6">
                <Checkbox
                    checked={tribute}
                    onChange={(e) => setTribute(e.target.checked)}
                >
                    Dédier ce don à quelqu'un
                </Checkbox>
            </div>

            {tribute && (
                <div className="mb-6">
                    <Text strong className="block mb-2">Votre message ou commentaire :</Text>
                    <Input.TextArea
                        rows={4}
                        placeholder="Ajoutez un message ou une dédicace"
                        value={message}
                        onChange={(e) => setMessage(e.target.value)}
                        className="rounded-lg"
                    />
                </div>
            )}

            <div className="text-center">
                <Button
                    type="primary"
                    size="large"
                    onClick={handleDonate}
                    className="bg-green-600 hover:bg-green-700 border-none rounded-lg"
                >
                    Faire un don
                </Button>
            </div>
        </div>
    );
};

export default Fdons;
