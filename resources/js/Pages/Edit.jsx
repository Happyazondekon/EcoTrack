import AppLayout from '@/Layouts/AppLayout';
import { Head } from '@inertiajs/react';
import { Row, Col } from 'antd';
import UserInfoForm from '@/Components/UserInfoForm';
import DeleteUserForm from './Profile/Partials/DeleteUserForm';
import UpdatePasswordForm from './Profile/Partials/UpdatePasswordForm';

export default function Edit() {
    return (
        <AppLayout>
            <Head title="Mon profile - EcoTrack" />

            <Row gutter={[16, 16]} align="top" className=' mx-auto p-4 md:p-8 bg-white rounded-xl'>
                {/* Left Column */}
                <Col xs={24} md={12}>
                    <div className="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <UserInfoForm />
                    </div>
                </Col>

                {/* Right Column */}
                <Col xs={24} md={12}>
                    <div className="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <UpdatePasswordForm className="max-w-xl" />
                    </div>
                    <div className="p-4 sm:p-8 bg-white shadow sm:rounded-lg mt-4">
                        <DeleteUserForm className="max-w-xl" />
                    </div>
                </Col>
            </Row>
        </AppLayout>
    );
}
