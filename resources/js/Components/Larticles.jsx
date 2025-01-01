import React, { useState, useEffect } from 'react';
import { Card, Spin, Alert, Input, Button, Typography } from 'antd';
import axios from 'axios';
import { usePage } from '@inertiajs/react';

const { Title, Text } = Typography;

const Larticles = () => {
    const { auth } = usePage().props;

    const [articles, setArticles] = useState([]);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);
    const [searchQuery, setSearchQuery] = useState('');
    const [filteredArticles, setFilteredArticles] = useState([]);
    const [expandedArticle, setExpandedArticle] = useState(null);

    useEffect(() => {
        axios.get('/api/articles')
            .then(response => {
                setArticles(response.data);
                setFilteredArticles(response.data);
                setLoading(false);
            })
            .catch(error => {
                console.error('Error fetching articles:', error);
                setError('Erreur de chargement des articles. Veuillez réessayer plus tard.');
                setLoading(false);
            });
    }, []);

    useEffect(() => {
        const result = articles.filter(article =>
            article.titre.toLowerCase().includes(searchQuery.toLowerCase()) ||
            article.contenu.toLowerCase().includes(searchQuery.toLowerCase())
        );
        setFilteredArticles(result);
    }, [searchQuery, articles]);

    const handleArticleClick = (articleId) => {
        setExpandedArticle(expandedArticle === articleId ? null : articleId);
    };

    if (loading) {
        return (
            <div className="text-center py-10">
                <Spin size="large" />
                <Text>Chargement des articles...</Text>
            </div>
        );
    }

    if (error) {
        return (
            <div className="text-center py-10">
                <Alert message={error} type="error" showIcon />
            </div>
        );
    }

    return (
        <div className="max-w-screen-xl mx-auto py-8 px-4 lg:px-8 bg-white rounded-lg shadow-sm">
            <Title level={2} className="text-gray-800 mb-6 text-center text-2xl font-bold">Liste des articles</Title>

            <div className="flex items-center mb-6 space-x-4">
                <Input
                    placeholder="Rechercher un article..."
                    value={searchQuery}
                    onChange={(e) => setSearchQuery(e.target.value)}
                    allowClear
                    className="flex-1 rounded-lg"
                />
                {auth.user.role_id === 3 && (
                    <Button
                        type="primary"
                        href={route('articles.create.frontend')}
                        className="bg-green-600 border-green-600 hover:bg-green-700 hover:border-green-700"
                    >
                        Rédiger un article
                    </Button>
                )}
            </div>

            <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                {filteredArticles.length > 0 ? filteredArticles.map(item => (
                    <Card
                        key={item.id}
                        hoverable
                        onClick={() => handleArticleClick(item.id)}
                        className="shadow-md transition-transform duration-300 hover:scale-105 rounded-lg"
                        cover={<img alt="Article" src="https://institut-superieur-environnement.com/content/uploads/2022/05/definition-transition-ecologique.jpg" className="h-48 object-cover rounded-t-lg" />}
                    >
                        <Card.Meta
                            title={
                                <Text strong className="text-green-600">
                                    {expandedArticle === item.id
                                        ? item.titre
                                        : item.titre.length > 20
                                            ? `${item.titre.substring(0, 20)}...`
                                            : item.titre}
                                </Text>
                            }
                            description={
                                <Text className="text-sm text-gray-600">
                                    {expandedArticle === item.id
                                        ? item.contenu
                                        : (item.contenu ? `${item.contenu.substring(0, 150)}...` : 'Aucun résumé disponible')}
                                </Text>
                            }
                        />
                    </Card>
                )) : (
                    <div className="text-center col-span-3 text-lg text-gray-600">Aucun article trouvé</div>
                )}
            </div>
        </div>
    );
};

export default Larticles;
