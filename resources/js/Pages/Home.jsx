import AppLayout from '@/Layouts/AppLayout';
import Hero from "@/Components/Hero";
import { Head } from '@inertiajs/react';
import DonationCTA from "@/Components/DonationCTA";
import Suggest from '@/Components/Sugest';

export default function Home() {
    return (
        <AppLayout>
            <Head title="EcoTrack" />
            <Hero />
            <DonationCTA />
            <Suggest />
        </AppLayout>
    );
};
