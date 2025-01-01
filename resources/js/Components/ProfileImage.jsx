import { Upload, Button, Avatar, message } from 'antd';
import { EditOutlined, UserOutlined, LoadingOutlined } from '@ant-design/icons';
import { useState } from 'react';

export default function ProfileImage({
    src,
    alt = 'Profile Picture',
    onChange,
    maxSize = 5, // Max size in MB
    allowedTypes = ['image/jpeg', 'image/png']
}) {
    const [loading, setLoading] = useState(false);

    const handleBeforeUpload = (file) => {
        // File type validation
        if (!allowedTypes.includes(file.type)) {
            message.error('You can only upload JPG/PNG files!');
            return false;
        }

        // File size validation (convert MB to bytes)
        if (file.size > maxSize * 1024 * 1024) {
            message.error(`Image must be smaller than ${maxSize}MB!`);
            return false;
        }

        setLoading(true);

        // Create a preview URL
        const reader = new FileReader();
        reader.onloadend = () => {
            onChange(file);
            setLoading(false);
        };
        reader.readAsDataURL(file);

        return false; // Prevent auto-upload
    };

    return (
        <div className="relative inline-block group">
            <Avatar
                src={src}
                icon={!src && <UserOutlined />}
                alt={alt}
                className="w-24 h-24 rounded-full object-cover border-2 border-gray-300 transition-all duration-200"
                size={96}
            />
            <Upload
                accept={allowedTypes.join(',')}
                showUploadList={false}
                beforeUpload={handleBeforeUpload}
                className="absolute bottom-0 right-0"
                disabled={loading}
            >
                <Button
                    icon={loading ? <LoadingOutlined /> : <EditOutlined />}
                    className="bg-gray-700 hover:bg-gray-800 text-white p-2 rounded-full transition-all duration-200 opacity-0 group-hover:opacity-100"
                    style={{ boxShadow: '0px 2px 6px rgba(0, 0, 0, 0.3)' }}
                    disabled={loading}
                >
                    {loading && <span className="ml-1">Uploading...</span>}
                </Button>
            </Upload>
        </div>
    );
}
