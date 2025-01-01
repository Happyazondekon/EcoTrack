import { useState } from 'react';
import AppLayout from '@/Layouts/AppLayout';
import { Head } from '@inertiajs/react';
import Pauthor from '@/Components/Pauthor';
import Larticles from '@/Components/Larticles';

export default function Edit() {
    const [showArticles, setShowArticles] = useState(false); // État pour afficher ou non les articles

    return (
        <AppLayout>
            <Head title="Mon profile - EcoTrack" />
            <Larticles />
            <Pauthor />
        </AppLayout>
    );
}
