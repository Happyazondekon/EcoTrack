import React from 'react';
import { useForm } from '@inertiajs/react';
import { Card, Form, Input, Select, Button } from 'antd';

const { TextArea } = Input;
const { Option } = Select;

const ArticleForm = () => {
    const { data, setData, post, processing, errors } = useForm({
        titre: '',
        contenu: '',
        statut: 'Brouillon'
    });

    const [form] = Form.useForm();

    const handleSubmit = (values) => {
        post(route('articles.store'), {
            onSuccess: () => {
                // Optional: Reset form or show success message
                form.resetFields();
            },
            onError: (error) => {
                // Optional: Handle specific errors
                console.error('Submission error', error);
            }
        });
    };

    return (
        <div className="body">
            <div className="row">
                <div className="col">
                    <Card title="Ajout d'un Article" className="w-full">
                        <Form
                            form={form}
                            layout="horizontal"
                            onFinish={handleSubmit}
                            labelCol={{ span: 6 }}
                            wrapperCol={{ span: 14 }}
                            initialValues={{
                                titre: '',
                                contenu: '',
                                statut: 'Brouillon'
                            }}
                        >
                            <Form.Item
                                name="titre"
                                label="Titre"
                                rules={[{
                                    required: true,
                                    message: 'Veuillez entrer un titre'
                                }]}
                                validateStatus={errors.titre ? 'error' : ''}
                                help={errors.titre}
                            >
                                <Input
                                    placeholder="Entrez le titre"
                                    onChange={(e) => setData('titre', e.target.value)}
                                />
                            </Form.Item>
                            <Form.Item
                                name="contenu"
                                label="Contenu"
                                rules={[{
                                    required: true,
                                    message: 'Veuillez entrer un contenu'
                                }]}
                                validateStatus={errors.contenu ? 'error' : ''}
                                help={errors.contenu}
                            >
                                <TextArea
                                    rows={5}
                                    placeholder="Entrez le contenu"
                                    onChange={(e) => setData('contenu', e.target.value)}
                                />
                            </Form.Item>
                            <Form.Item
                                name="statut"
                                label="Statut"
                                rules={[{
                                    required: true,
                                    message: 'Veuillez sélectionner un statut'
                                }]}
                                validateStatus={errors.statut ? 'error' : ''}
                                help={errors.statut}
                            >
                                <Select
                                    placeholder="Sélectionnez un statut"
                                    onChange={(value) => setData('statut', value)}
                                >
                                    <Option value="Brouillon">Brouillon</Option>
                                    <Option value="Publié">Publié</Option>
                                </Select>
                            </Form.Item>
                            <Form.Item wrapperCol={{ offset: 6, span: 14 }}>
                                <Button
                                    type="primary"
                                    htmlType="submit"
                                    loading={processing}
                                >
                                    Enregistrer
                                </Button>
                            </Form.Item>
                        </Form>
                    </Card>
                </div>
            </div>
        </div>
    );
};

export default ArticleForm;
