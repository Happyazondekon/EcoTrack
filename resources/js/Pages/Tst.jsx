import AppLayout from '@/Layouts/AppLayout';
import { Head } from '@inertiajs/react';
import DistanceCalculator from '@/Components/jTest';

export default function Home() {
    return (
        <AppLayout>
            <Head title="EcoTrack" />
            <DistanceCalculator />
        </AppLayout>
    );
};
