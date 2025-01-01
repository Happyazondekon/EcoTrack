import React from 'react';
import { Alert, Card } from 'antd';

const Recommendation = ({ category, score }) => {
    const recommendations = {
        transport: [
            "Privilégiez les transports en commun ou le covoiturage.",
            "Réduisez les déplacements en voiture individuelle.",
            "Envisagez l'achat d'un véhicule électrique ou hybride.",
            "Utilisez des moyens de transport doux comme le vélo ou la marche."
        ],
        food: [
            "Réduisez la consommation de viande rouge et de produits transformés.",
            "Privilégiez les produits biologiques et locaux.",
            "Réduisez le gaspillage alimentaire en planifiant vos repas.",
            "Adoptez une alimentation plus végétarienne ou flexitarienne."
        ],
        heating: [
            "Améliorez l'isolation de votre logement pour éviter les pertes de chaleur.",
            "Réduisez la température de chauffage et portez des vêtements chauds.",
            "Investissez dans des équipements de chauffage plus efficaces comme les pompes à chaleur.",
            "Utilisez des sources d'énergie renouvelables pour chauffer votre maison."
        ],
        "seasonal-produce": [
            "Consommez des fruits et légumes de saison pour réduire l'empreinte carbone liée à l'importation.",
            "Achetez des produits locaux pour limiter le transport.",
            "Réduisez la consommation de produits emballés ou transformés.",
            "Favorisez les marchés fermiers et les circuits courts."
        ]
    };

    const selectedRecommendations = recommendations[category] || [
        "Aucune recommandation disponible pour cette catégorie."
    ];

    return (
        <div style={{ marginTop: '20px' }}>
            <Alert
                message={`Recommandations pour ${category === 'seasonal-produce' ? 'les fruits et légumes' : category}`}
                type="info"
                showIcon
                style={{
                    backgroundColor: '#e8f5e9',
                    borderColor: '#81c784',
                    color: '#2e7d32',
                    fontWeight: 'bold',
                    borderRadius: '5px',
                    padding: '10px',
                }}
            />
            <div style={{ marginTop: '20px' }}>
                {selectedRecommendations.map((recommendation, index) => (
                    <Card
                        key={index}
                        bordered
                        style={{
                            marginBottom: '15px',
                            border: '1px solid #c8e6c9',
                            borderRadius: '8px',
                            backgroundColor: '#f1f8e9',
                            padding: '15px',
                            boxShadow: '0 2px 8px rgba(0, 0, 0, 0.1)',
                            transition: 'transform 0.2s ease',
                        }}
                    >
                        <p
                            style={{
                                margin: 0,
                                fontSize: '16px',
                                color: '#33691e',
                            }}
                        >
                            {recommendation}
                        </p>
                    </Card>
                ))}
            </div>
        </div>
    );
};

export default Recommendation;