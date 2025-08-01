<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    // Static property to track used titles across all factory calls
    protected static array $titles = [];
    protected static array $categoryMap = [];

    public function definition(): array
    {
        // Populate and shuffle only once
        if (empty(self::$titles)) {
            self::initializeTitleCategoryMap();
        }

        // Pop one [title => category] pair from the list
        [$title, $category] = array_shift(self::$titles);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'category' => $category,
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'discount_percentage' => $this->faker->randomElement([0, 10, 15, 20, 25]),
            'reviews' => $this->faker->randomFloat(1, 3.5, 5),
            'short_description' => $this->faker->sentence(10),
            'long_description' => $this->faker->paragraph(4),
            'estimated_delivery_time' => $this->faker->randomElement(['2-3 days', '1 week', '48 hours']),
            'is_featured' => $this->faker->boolean(15),
            'status' => 'active',
        ];
    }

    protected static function initializeTitleCategoryMap(): void
    {
        $map = [
            'Web Development' => [
                'Custom Laravel Web App',
                'Responsive React Website',
                'WordPress Blog Setup',
                'Vue.js Admin Panel',
            ],
            'Mobile App Development' => [
                'iOS Shopping App',
                'Flutter Food Delivery App',
                'React Native Chat App',
                'PWA for Booking System',
            ],
            'UI/UX & Design' => [
                'Figma Website Mockup',
                'Mobile App UI Kit',
                'Brand Logo & Guidelines',
                'Wireframe for SaaS Dashboard',
            ],
            'Digital Marketing & SEO' => [
                'SEO Audit & Optimization',
                'Google Ads Campaign Setup',
                'Content Marketing Strategy',
                'Facebook Ads Management',
            ],
            'Software & Automation' => [
                'CRM Software for Sales',
                'Custom API Automation',
                'ERP System for Inventory',
                'SaaS Tool for Team Collaboration',
            ],
            'Cloud & DevOps' => [
                'AWS Cloud Infrastructure Setup',
                'Dockerized CI/CD Pipeline',
                'Azure Serverless Hosting',
                'Kubernetes Deployment Service',
            ],
            'Cybersecurity' => [
                'Website Security Audit',
                'Penetration Testing Service',
                'SSL Installation & Setup',
                'DDoS Protection Configuration',
            ],
            'Multimedia & Visuals' => [
                '2D Animation Explainer Video',
                'VFX for Commercial Ad',
                '3D Product Rendering',
                'Motion Graphics Promo',
            ],
            'AI & Data Services' => [
                'AI Chatbot Integration',
                'Customer Data Dashboard',
                'ML Model Training Service',
                'Big Data Analytics Setup',
            ],
            'E-commerce Solutions' => [
                'Shopify Store Setup',
                'WooCommerce Product Manager',
                'Multi-vendor Marketplace Dev',
                'Payment Gateway Integration',
            ],
            'Business & Enterprise Solutions' => [
                'SaaS Booking System',
                'Freelance Marketplace Platform',
                'B2B Portal with Admin Panel',
                'Learning Management System (LMS)',
            ],
        ];

        // Flatten into an array of [title, category] pairs
        $pairs = [];
        foreach ($map as $category => $titles) {
            foreach ($titles as $title) {
                $pairs[] = [$title, $category];
            }
        }

        // Shuffle for randomness
        shuffle($pairs);

        // Store for all factory instances
        self::$titles = $pairs;
    }
}
