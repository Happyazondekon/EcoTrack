import AppLayout from '@/Layouts/AppLayout';
import { Head } from '@inertiajs/react';
import Mission from '@/Components/Mission';

export default function Home() {
    return (
        <AppLayout>
            <Head title="EcoTrack" />
            <Mission />
        </AppLayout>
    );
};
