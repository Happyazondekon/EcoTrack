import React from 'react';
import { Row, Col, Typography, Space, Button } from 'antd';
import {
    TwitterOutlined,
    LinkedinOutlined,
    InstagramOutlined,
    GithubOutlined
} from '@ant-design/icons';

const Footer = () => {
    const currentYear = new Date().getFullYear();

    const socialLinks = [
        { icon: <TwitterOutlined />, href: 'https://twitter.com/yourcompany', label: 'Twitter' },
        { icon: <LinkedinOutlined />, href: 'https://linkedin.com/company/yourcompany', label: 'LinkedIn' },
        { icon: <InstagramOutlined />, href: 'https://instagram.com/yourcompany', label: 'Instagram' },
        { icon: <GithubOutlined />, href: 'https://github.com/yourcompany', label: 'GitHub' }
    ];

    const footerSections = [
        {
            title: 'Entreprise',
            links: [
                { text: 'À propos', href: '/about' },
                { text: 'Carrières', href: '/careers' },
                { text: 'Presse', href: '/press' }
            ]
        },
        {
            title: 'Produits',
            links: [
                { text: 'Services', href: '/services' },
                { text: 'Tarification', href: '/pricing' },
                { text: 'Démonstration', href: '/demo' }
            ]
        },
        {
            title: 'Ressources',
            links: [
                { text: 'Blog', href: '/blog' },
                { text: 'Support', href: '/support' },
                { text: 'Documentation', href: '/docs' }
            ]
        }
    ];

    return (
        <footer className="bg-gray-50 py-12 px-6">
            <div className="max-w-screen-xl mx-auto">
                <Row gutter={[24, 24]}>
                    <Col xs={24} md={8}>
                        <img
                            src="/logo/Logo-svg2.svg"
                            alt="Company Logo"
                            className="h-10 mb-4"
                        />
                        <Typography.Text
                            className="text-gray-600 block mb-4 text-base"
                        >
                            Transforming ideas into digital solutions with innovative technology.
                        </Typography.Text>
                        <Space>
                            {socialLinks.map((link, index) => (
                                <Button
                                    key={index}
                                    type="text"
                                    icon={link.icon}
                                    href={link.href}
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    aria-label={link.label}
                                    className="text-gray-700 hover:text-[#3ACC86] text-xl"
                                />
                            ))}
                        </Space>
                    </Col>
                    <Col xs={24} md={16}>
                        <Row gutter={[24, 24]}>
                            {footerSections.map((section, index) => (
                                <Col key={index} xs={24} sm={8}>
                                    <Typography.Title
                                        level={4}
                                        className="mb-4 text-gray-900 text-base font-semibold"
                                    >
                                        {section.title}
                                    </Typography.Title>
                                    {section.links.map((link, linkIndex) => (
                                        <Typography.Link
                                            key={linkIndex}
                                            href={link.href}
                                            className="block text-gray-600 hover:text-[#3ACC86] text-base font-normal mb-2 transition-colors duration-300 ease-in-out"
                                        >
                                            {link.text}
                                        </Typography.Link>
                                    ))}
                                </Col>
                            ))}
                        </Row>
                    </Col>
                </Row>
                <div className="border-t border-gray-200 mt-8 pt-4 text-center">
                    <Typography.Text
                        className="text-gray-500 text-base"
                    >
                        © {currentYear} Votre Entreprise. Tous droits réservés.
                    </Typography.Text>
                </div>
            </div>
        </footer>
    );
};

export default Footer;
