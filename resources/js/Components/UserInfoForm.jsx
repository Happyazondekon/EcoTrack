import React, { useState } from 'react';
import {
    Form,
    Input,
    Select,
    Button,
    Upload,
    message,
    Avatar,
    Space
} from 'antd';
import {
    UserOutlined,
    CameraOutlined,
    EditOutlined,
    DeleteOutlined
} from '@ant-design/icons';
import { usePage, router } from '@inertiajs/react';

const ProfileUpdateForm = () => {
    const {
        auth,
        arrondissements,
        roles,
        badges,
        communes
    } = usePage().props;
    const user = auth.user;

    const [form] = Form.useForm();
    const [profileImage, setProfileImage] = useState(null);
    const [imageToUpload, setImageToUpload] = useState(null);

    // Default avatar as inline SVG
    const defaultAvatar = `data:image/svg+xml,${encodeURIComponent(`
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#9CA3AF">
      <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/>
    </svg>
  `)}`;

    // Determine profile picture URL
    const getProfilePictureUrl = () => {
        if (profileImage) return profileImage;
        if (user.photo_profil) {
            return user.photo_profil.startsWith('http')
                ? user.photo_profil
                : `/storage/${user.photo_profil}`;
        }
        return defaultAvatar;
    };

    const handleImageUpload = (info) => {
        const file = info.file;
        const isImage = file.type.startsWith('image/');

        if (!isImage) {
            message.error('Vous pouvez uniquement télécharger des fichiers image !');
            return;
        }

        const reader = new FileReader();
        reader.onload = (event) => {
            setProfileImage(event.target.result);
            setImageToUpload(file);
        };
        reader.readAsDataURL(file);
    };

    const handleImageRemove = () => {
        setProfileImage(null);
        setImageToUpload(null);
        form.setFieldsValue({ photo_profil: null });
    };

    const onFinish = (values) => {
        const formData = new FormData();
        formData.append('_method', 'PATCH');

        // Add all form values
        Object.entries(values).forEach(([key, value]) => {
            if (value !== undefined && value !== null) {
                formData.append(key, value);
            }
        });

        // Handle profile picture
        if (imageToUpload) {
            formData.append('photo_profil', imageToUpload);
        } else if (profileImage === null) {
            // If image is explicitly removed
            formData.append('photo_profil', '');
        }

        router.post(route('profile.update'), formData, {
            preserveScroll: true,
            forceFormData: true,
            onSuccess: () => {
                message.success('Profil mis à jour avec succès !');
                setImageToUpload(null);
            },
            onError: (errors) => {
                console.error(errors);
                message.error('Échec de la mise à jour du profil.');
            }
        });
    };

    return (
        <div className="max-w-4xl mx-auto p-4 md:p-8 bg-white rounded-xl">
            <Form
                form={form}
                layout="vertical"
                onFinish={onFinish}
                initialValues={{
                    name: user.name,
                    prenom: user.prenom,
                    sexe: user.sexe,
                    email: user.email,
                    telephone: user.telephone,
                    arrondissement_id: user.arrondissement_id,
                    role_id: user.role_id,
                    badge_id: user.badge_id,
                }}
                className="space-y-4"
            >
                {/* Profile Picture Section */}
                <div className="flex flex-col items-center mb-6">
                    <div className="relative mb-3">
                        <Avatar
                            src={getProfilePictureUrl()}
                            size={120}
                            icon={<UserOutlined />}
                            className="border-4 border-emerald-500 shadow-lg transition-transform hover:scale-105"
                        />
                    </div>
                    <Space direction="vertical" size="small" className="w-full items-center">
                        <Upload
                            showUploadList={false}
                            beforeUpload={() => false}
                            onChange={handleImageUpload}
                        >
                            <Button icon={<CameraOutlined />} type="primary" ghost>
                                Changer la photo
                            </Button>
                        </Upload>
                        {user.photo_profil && (
                            <Button icon={<DeleteOutlined />} danger onClick={handleImageRemove}>
                                Supprimer
                            </Button>
                        )}
                    </Space>
                </div>

                {/* Personal Information */}
                <div className="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <Form.Item
                        name="name"
                        label="Nom"
                        rules={[{ required: true, message: 'Veuillez entrer votre nom' }]}
                        className="mb-2"
                    >
                        <Input prefix={<UserOutlined />} placeholder="Votre nom" />
                    </Form.Item>

                    <Form.Item name="prenom" label="Prénom" className="mb-2">
                        <Input prefix={<UserOutlined />} placeholder="Votre prénom" />
                    </Form.Item>
                </div>

                <div className="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <Form.Item name="sexe" label="Sexe" className="mb-2">
                        <Select placeholder="Sélectionner votre sexe">
                            <Select.Option value="M">Masculin</Select.Option>
                            <Select.Option value="F">Féminin</Select.Option>
                            <Select.Option value="A">Autres</Select.Option>
                        </Select>
                    </Form.Item>

                    <Form.Item name="arrondissement_id" label="Arrondissement" className="mb-2">
                        <Select
                            showSearch
                            placeholder="Sélectionner votre arrondissement"
                            optionFilterProp="children"
                            filterOption={(input, option) =>
                                option?.children?.toString().toLowerCase().includes(input.toLowerCase())
                            }
                        >
                            {communes.map(commune => (
                                <Select.OptGroup key={commune.id} label={commune.nom}>
                                    {arrondissements
                                        .filter(arr => arr.commune_id === commune.id)
                                        .map(arrondissement => (
                                            <Select.Option key={arrondissement.id} value={arrondissement.id}>
                                                {arrondissement.nom}
                                            </Select.Option>
                                        ))}
                                </Select.OptGroup>
                            ))}
                        </Select>
                    </Form.Item>
                </div>

                {/* Role and Badge */}
                <div className="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <Form.Item name="role_id" label="Rôle" className="mb-2">
                        <Select disabled placeholder="Rôle">
                            {roles.map(role => (
                                <Select.Option
                                    key={role.id}
                                    value={role.id}
                                    selected={user.role_id === role.id}
                                >
                                    {role.nom}
                                </Select.Option>
                            ))}
                        </Select>
                    </Form.Item>

                    <Form.Item name="badge_id" label="Badge" className="mb-2">
                        <Select disabled placeholder="Badge">
                            {badges.map(badge => (
                                <Select.Option
                                    key={badge.id}
                                    value={badge.id}
                                    selected={user.badge_id === badge.id}
                                >
                                    {badge.nom}
                                </Select.Option>
                            ))}
                        </Select>
                    </Form.Item>
                </div>

                {/* Contact Information */}
                <div className="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <Form.Item
                        name="email"
                        label="Email"
                        rules={[
                            { required: true, message: 'Veuillez entrer votre email' },
                            { type: 'email', message: 'Veuillez entrer un email valide' }
                        ]}
                        className="mb-2"
                    >
                        <Input prefix={<EditOutlined />} placeholder="Votre email" />
                    </Form.Item>

                    <Form.Item name="telephone" label="Téléphone" className="mb-2">
                        <Input prefix={<EditOutlined />} placeholder="Votre téléphone" />
                    </Form.Item>
                </div>

                {/* Submit Button */}
                <Form.Item className="mb-0 mt-4">
                    <Button
                        type="primary"
                        htmlType="submit"
                        block
                        size="large"
                        className="bg-emerald-500 hover:bg-emerald-600 rounded-lg text-lg font-medium h-12"
                    >
                        Mettre à jour mon profil
                    </Button>
                </Form.Item>
            </Form>
        </div>
    );
};

export default ProfileUpdateForm;
