import { useState } from 'react';
import AppLayout from '@/Layouts/AppLayout';
import { Head } from '@inertiajs/react';
import ArticleForm from '@/Components/ArticleForm';

export default function Edit() {
    const [showArticles, setShowArticles] = useState(false); // État pour afficher ou non les articles

    return (
        <AppLayout>
            <Head title="Mon profile - EcoTrack" />
            <ArticleForm />
        </AppLayout>
    );
}
