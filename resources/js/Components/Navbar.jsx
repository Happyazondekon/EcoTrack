import React, { useState, useEffect } from 'react';
import { Link, router } from '@inertiajs/react';
import { Dropdown, Button, Image, Drawer } from 'antd';
import { MenuOutlined, DownOutlined, UserOutlined } from '@ant-design/icons';
import '@/Types/User'; // Only to include JSDoc types, no `User` object exists
import axios from 'axios';

// Menu Items Constants
const MENU_ITEMS = [
    { key: 'home', label: 'Accueil', href: route('home') },
    { key: 'articles', label: 'Articles', href: route('articles.all') },
    {
        key: 'services',
        label: 'À Propos',
        type: 'dropdown',
        children: [
            { key: 'our-services', label: 'Mission', href: route('mission') },
            { key: 'service-details', label: 'Faire une suggestion', href: '/services-details' }
        ]
    },
];

const AUTH_LINKS = [
    {
        key: 'guest',
        icon: <UserOutlined />,
        label: 'Invité',
        type: 'dropdown',
        unauthenticated: true,
        children: [
            { key: 'login', label: 'Se connecter', href: route('login') },
            { key: 'register', label: 'S\'inscrire', href: route('register') },
        ]
    },
    {
        key: 'logged',
        icon: <UserOutlined />,
        label: 'Compte',
        type: 'dropdown',
        authenticated: true,
        children: [
            { key: 'dashboard', label: 'Dashboard', href: route('admin') },
            { key: 'account', label: 'Mon compte', href: route('profile.edit') },
            { key: 'logout', label: 'Logout', href: route('logout'), method: "post", logout: true },
        ]
    }
];

const Navbar = () => {
    const [drawerVisible, setDrawerVisible] = useState(false);
    const [isAuthenticated, setIsAuthenticated] = useState(false);

    /** @type {[User|null, Function]} */
    const [user, setUser] = useState(null);
    const [openDropdowns, setOpenDropdowns] = useState({});

    useEffect(() => {
        axios.get('/api/auth-status')
            .then(response => {
                setIsAuthenticated(response.data.isAuthenticated);
                setUser(response.data.user)

                // Dynamically update the label for the logged-in user
                if (response.data.isAuthenticated && response.data.user) {
                    AUTH_LINKS.find(link => link.key === 'logged').label = `${response.data.user.prenom + " " + response.data.user.name}`;
                }
            })
            .catch(error => console.error('Authentication check failed', error));
    }, []);

    const handleLogout = (e) => {
        e.preventDefault();
        router.post(route('logout'));
    };

    const toggleDrawer = () => setDrawerVisible(prev => !prev);

    const handleDropdownVisibilityChange = (key, isOpen) => {
        setOpenDropdowns(prev => ({
            ...prev,
            [key]: isOpen
        }));
    };

    const getApplicableAuthLinks = () =>
        AUTH_LINKS.filter(link =>
            (link.authenticated && isAuthenticated) ||
            (link.unauthenticated && !isAuthenticated)
        );

    const renderMenuItems = (isMobile = false) => {
        const allItems = [...MENU_ITEMS, ...getApplicableAuthLinks()];

        return allItems.map(item =>
            item.type === 'dropdown' ? (
                <Dropdown
                    key={item.key}
                    menu={{
                        items: item.children.map(child => ({
                            key: child.key,
                            label: (
                                <a
                                    href={child.href}
                                    method={child.method || 'get'}
                                    {...(child.logout ? { onClick: handleLogout } : {})}
                                    className={isMobile
                                        ? "block px-3 py-2 text-gray-800 hover:text-[#3ACC86] transition-colors font-bold text-base"
                                        : "text-base font-medium text-gray-800 hover:text-[#3ACC86] py-2"}
                                >
                                    {child.label}
                                </a>
                            )
                        })),
                        style: {
                            width: isMobile ? '100%' : '250px',
                            borderRadius: '12px',
                            padding: '8px'
                        }
                    }}
                    trigger={isMobile ? ['click'] : ['hover']}
                    onOpenChange={(open) => handleDropdownVisibilityChange(item.key, open)}
                >
                    <Button
                        type="text"
                        block={isMobile}
                        icon={item.icon}
                        className={`text-left px-3 text-gray-800 hover:bg-green-50 transition-colors font-bold text-base flex items-center justify-between ${isMobile ? '' : 'rounded-lg'}`}
                    >
                        <span>{item.label}</span>
                        {!item.icon && (
                            <DownOutlined
                                className={`text-xs transform transition-transform duration-300 ${openDropdowns[item.key] ? 'rotate-180' : ''}`}
                            />
                        )}
                    </Button>
                </Dropdown>
            ) : (
                <a
                    key={item.key}
                    href={item.href}
                    method={item.method || 'get'}
                    className={`px-3 text-gray-800 hover:text-[#3ACC86] transition-colors font-bold text-base ${isMobile ? 'block py-2' : 'rounded-lg hover:bg-green-50 py-2'}`}
                >
                    {item.label}
                </a>
            )
        );
    };

    return (
        <nav className="bg-white shadow-none border-b border-gray-100">
            <div className="max-w-screen-xl mx-auto flex justify-between items-center py-2 px-4 lg:px-8">
                <Link href="/" className="flex items-center">
                    <Image
                        src="/logo/Logo-svg2.svg"
                        alt="Logo"
                        preview={false}
                        className="h-8 object-contain"
                    />
                </Link>

                <div className="hidden md:flex items-center space-x-4">
                    {renderMenuItems()}
                    <Button
                        className="bg-[#3ACC86] border-[#3ACC86] hover:bg-[#2eb570] text-black rounded-lg font-bold text-base"
                        onClick={() => window.location.href = route('calcul')}
                    >
                        Essayez maintenant
                    </Button>
                </div>

                <Button
                    type="text"
                    icon={<MenuOutlined />}
                    onClick={toggleDrawer}
                    className="md:hidden"
                />

                <Drawer
                    title="Menu"
                    placement="right"
                    onClose={toggleDrawer}
                    open={drawerVisible}
                    width={300}
                    className="md:hidden"
                >
                    <div className="space-y-4">
                        {renderMenuItems(true)}
                        <Button
                            block
                            className="bg-[#3ACC86] border-[#3ACC86] hover:bg-[#2eb570] text-black rounded-lg font-bold text-base"
                            onClick={() => window.location.href = '/contact'}
                        >
                            Essayez maintenant
                        </Button>
                    </div>
                </Drawer>
            </div>
        </nav>
    );
};

export default Navbar;
