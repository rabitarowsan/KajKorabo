document.addEventListener('DOMContentLoaded', function() {
    const serviceCards = document.querySelectorAll('.bbi-startup-service-card-2024');
    const serviceDetails = document.getElementById('bbi-startup-service-details-2024');
    const closeDetails = document.querySelector('.bbi-startup-close-details-2024');
    const detailsTitle = document.querySelector('.bbi-startup-details-title-2024');
    const detailsDescription = document.querySelector('.bbi-startup-details-description-2024');
    const detailsFeatures = document.querySelector('.bbi-startup-details-features-2024');
    const ctaButton = document.querySelector('.bbi-startup-cta-button-2024');
    const filterButtons = document.querySelectorAll('.bbi-startup-filter-btn-2024');

    const serviceInfo = {
        strategy: {
            title: "Digital Marketing Strategy",
            description: "Unlock your startup's full potential with our data-driven digital marketing strategies. We craft bespoke plans that align perfectly with your unique goals, target audience, and industry dynamics. Our focus is on delivering maximum ROI and sustainable growth, ensuring your startup not only survives but thrives in the competitive digital landscape.",
            features: [
                "Comprehensive market analysis and competitor benchmarking",
                "Custom KPI setting and performance tracking dashboards",
                "Multi-channel marketing planning optimized for startups",
                "Agile strategy adaptation based on real-time data insights",
                "Regular strategy reviews and optimization sessions"
            ]
        },
        seo: {
            title: "SEO & Content Marketing",
            description: "Elevate your startup's online visibility and attract high-quality leads with our expert SEO and content marketing services. We create compelling, SEO-optimized content that not only resonates with your audience but also drives organic growth. Our strategies are designed to establish your startup as an industry thought leader.",
            features: [
                "In-depth keyword research and competitive analysis",
                "On-page and technical SEO optimization",
                "Content strategy development tailored to your startup's niche",
                "Creation of engaging blog posts, articles, and multimedia content",
                "Link building and digital PR to boost domain authority"
            ]
        },
        social: {
            title: "Social Media & PPC Advertising",
            description: "Harness the power of social media and paid advertising to accelerate your startup's growth. Our campaigns are meticulously designed to increase brand awareness, engagement, and conversions. We leverage cutting-edge tools and strategies to ensure your message reaches the right audience at the right time.",
            features: [
                "Comprehensive social media strategy development",
                "Content creation and curation for maximum engagement",
                "Community management and brand reputation monitoring",
                "Targeted PPC campaign setup and management across platforms",
                "Advanced audience targeting and retargeting strategies"
            ]
        },
        web: {
            title: "Web Development & UX/UI Design",
            description: "Create a stunning online presence that converts visitors into customers. Our web development and UX/UI design services are tailored to reflect your startup's unique identity and meet the specific needs of your target audience. We build responsive, user-friendly websites that not only look great but also drive results.",
            features: [
                "Custom website design aligned with your brand identity",
                "Responsive development for seamless multi-device experiences",
                "User experience optimization to boost conversion rates",
                "E-commerce integration and optimization",
                "Ongoing website maintenance and performance optimization"
            ]
        },
        email: {
            title: "Email Marketing",
            description: "Nurture leads and boost customer retention with our tailored email marketing campaigns. We help you build meaningful relationships with your audience through personalized, timely, and relevant email communications that drive engagement and conversions.",
            features: [
                "Email list building and segmentation strategies",
                "Design and development of responsive email templates",
                "Automated drip campaigns and nurture sequences",
                "A/B testing for subject lines, content, and send times",
                "Performance tracking and continuous optimization"
            ]
        },
        content: {
            title: "Content Creation",
            description: "Craft compelling stories that resonate with your target audience and drive engagement. Our content creation services are designed to establish your startup as a thought leader in your industry, building trust and credibility with potential customers.",
            features: [
                "Content strategy development aligned with business goals",
                "Creation of blog posts, whitepapers, and ebooks",
                "Infographic and visual content design",
                "Video scripting and production",
                "Content repurposing for multiple platforms"
            ]
        },
        analytics: {
            title: "Analytics & Reporting",
            description: "Gain actionable insights from your data to make informed business decisions. Our analytics and reporting services help you understand your audience better, optimize your marketing efforts, and maximize your ROI.",
            features: [
                "Custom dashboard setup for real-time performance monitoring",
                "Multi-channel data integration and analysis",
                "Conversion funnel analysis and optimization",
                "Regular performance reports with actionable insights",
                "Data-driven recommendations for strategy improvement"
            ]
        },
        conversion: {
            title: "Conversion Rate Optimization",
            description: "Maximize your website's potential to turn visitors into customers. Our CRO services are designed to improve user experience, increase engagement, and boost conversions across all your digital touchpoints.",
            features: [
                "In-depth website analysis and user behavior tracking",
                "A/B and multivariate testing of page elements",
                "Landing page optimization for higher conversion rates",
                "User experience enhancements based on heatmaps and session recordings",
                "Ongoing optimization and performance monitoring"
            ]
        },
                  "lean-marketing": {
            title: "Lean Marketing Strategy",
            description: "Maximize your startup's growth with minimal resources using our Lean Marketing Strategy. We employ agile, data-driven tactics to ensure every marketing dollar counts, helping you achieve rapid growth and market validation.",
            features: [
                "Rapid market testing and validation",
                "Cost-effective customer acquisition strategies",
                "Iterative campaign optimization",
                "Focus on key performance indicators (KPIs)",
                "Scalable marketing frameworks"
            ]
        },
        "mvp-landing": {
            title: "MVP Landing Pages",
            description: "Validate your product ideas quickly and efficiently with our high-converting MVP landing pages. We design and develop pages that capture user interest, gather valuable feedback, and drive early adoptions.",
            features: [
                "User-centric design focused on conversion",
                "A/B testing for optimal performance",
                "Integration with analytics and CRM tools",
                "Mobile-responsive layouts",
                "Quick deployment and iteration"
            ]
        },
        "growth-hacking": {
            title: "Growth Hacking",
            description: "Accelerate your startup's growth with our innovative growth hacking techniques. We employ creative, often unconventional methods to drive rapid user acquisition, engagement, and retention.",
            features: [
                "Cross-channel growth strategies",
                "Viral loop implementation",
                "Gamification of user onboarding",
                "Referral program optimization",
                "Data-driven experimentation and scaling"
            ]
        },
        "investor-pitch": {
            title: "Investor Pitch Decks",
            description: "Secure the funding your startup needs with our compelling investor pitch decks. We create visually stunning and strategically crafted presentations that effectively communicate your vision, traction, and potential to investors.",
            features: [
                "Storytelling-driven pitch narratives",
                "Custom-designed slides and infographics",
                "Financial projections and market analysis",
                "Tailored content for different investor stages",
                "Pitch coaching and presentation training"
            ]
        },
        "viral-loops": {
            title: "Viral Loop Implementation",
            description: "Achieve exponential growth by leveraging the power of viral marketing. We design and implement viral loops that encourage users to promote your product organically, resulting in rapid, cost-effective user acquisition.",
            features: [
                "Viral coefficient optimization",
                "In-product sharing mechanics",
                "Incentive structure design",
                "Viral content creation strategies",
                "Performance tracking and iteration"
            ]
        },
        "community-building": {
            title: "Community Building",
            description: "Foster a loyal user base and create brand advocates through strategic community building. We help you develop and nurture a community around your product, driving engagement, retention, and organic growth.",
            features: [
                "Community platform selection and setup",
                "Engagement strategy development",
                "User-generated content initiatives",
                "Community manager training",
                "Metrics tracking and community health assessment"
            ]
        },
        "product-hunt": {
            title: "Product Hunt Launch",
            description: "Make a splash in the startup ecosystem with a strategically planned Product Hunt launch. We help you prepare, execute, and follow up on a successful Product Hunt campaign to maximize exposure and early user acquisition.",
            features: [
                "Launch timing and strategy planning",
                "Product page optimization",
                "Hunter and influencer outreach",
                "Community engagement during launch",
                "Post-launch follow-up and user onboarding"
            ]
        },
        "startup-seo": {
            title: "Startup-Focused SEO",
            description: "Boost your startup's visibility in the digital landscape with our tailored SEO strategies. We focus on helping you rank for key terms in your niche, attracting quality traffic, and establishing thought leadership.",
            features: [
                "Startup ecosystem keyword research",
                "Technical SEO for rapid indexing",
                "Content strategy for thought leadership",
                "Link building within startup networks",
                "Local SEO for regional startup ecosystems"
            ]
        },
        "influencer-collab": {
            title: "Influencer Collaborations",
            description: "Amplify your startup's message and reach through strategic influencer partnerships. We connect you with niche influencers who align with your brand values and can effectively communicate your product's value to their engaged audiences.",
            features: [
                "Niche influencer identification and vetting",
                "Collaboration strategy development",
                "Campaign ideation and execution",
                "Performance tracking and ROI analysis",
                "Long-term influencer relationship management"
            ]
        },
        "startup-analytics": {
            title: "Startup Analytics Suite",
            description: "Gain actionable insights with our custom analytics solutions tailored for startups. We help you track and optimize key metrics that matter most for your growth stage and business model.",
            features: [
                "Custom dashboard development",
                "Key metric identification and tracking",
                "Funnel analysis and optimization",
                "Cohort analysis for user behavior",
                "Predictive analytics for growth forecasting"
            ]
        },
        "saas-marketing": {
            title: "SaaS Marketing Automation",
            description: "Streamline your marketing efforts and scale your SaaS startup with our tailored marketing automation solutions. We implement automated funnels that nurture leads, onboard users, and drive customer retention.",
            features: [
                "End-to-end funnel automation",
                "Personalized email sequences",
                "In-app messaging and onboarding flows",
                "Churn prediction and prevention automation",
                "Upsell and cross-sell campaign automation"
            ]
        },
        "startup-crm": {
            title: "Startup CRM Integration",
            description: "Optimize your customer relationships and sales processes with our startup-focused CRM integration services. We set up and customize CRM systems to efficiently manage leads, nurture relationships, and drive conversions.",
            features: [
                "CRM system selection and customization",
                "Sales pipeline optimization",
                "Lead scoring and prioritization",
                "Integration with marketing automation tools",
                "Sales team training and adoption support"
            ]
        }
    };

    function openServiceDetails(service) {
        const info = serviceInfo[service];
        detailsTitle.textContent = info.title;
        detailsDescription.textContent = info.description;
        detailsFeatures.innerHTML = info.features.map(feature => `<li>${feature}</li>`).join('');
        serviceDetails.classList.add('active');
        document.body.style.overflow = 'hidden';

        // Animate features
        animateFeatures();
    }

    function closeServiceDetails() {
        serviceDetails.classList.remove('active');
        document.body.style.overflow = '';
    }

    function animateFeatures() {
        const features = detailsFeatures.querySelectorAll('li');
        features.forEach((feature, index) => {
            feature.style.opacity = '0';
            feature.style.transform = 'translateY(20px)';
            setTimeout(() => {
                feature.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                feature.style.opacity = '1';
                feature.style.transform = 'translateY(0)';
            }, index * 100);
        });
    }

    serviceCards.forEach(card => {
        card.addEventListener('click', (e) => {
            e.preventDefault();
            const service = card.getAttribute('data-service');
            openServiceDetails(service);
            createConfetti(e.clientX, e.clientY); // Pass click coordinates
        });
    });

    closeDetails.addEventListener('click', closeServiceDetails);

    serviceDetails.addEventListener('click', (e) => {
        if (e.target === serviceDetails) {
            closeServiceDetails();
        }
    });

    // Filter functionality
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');
            filterServices(filter);
            setActiveFilter(button);
        });
    });

    function filterServices(filter) {
        serviceCards.forEach(card => {
            if (filter === 'all' || card.getAttribute('data-category') === filter) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    }

    function setActiveFilter(activeButton) {
        filterButtons.forEach(button => button.classList.remove('active'));
        activeButton.classList.add('active');
    }

    // Add hover effect for service cards
    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-10px)';
            card.style.boxShadow = '0 15px 30px rgba(0, 0, 0, 0.1)';
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
            card.style.boxShadow = 'var(--shadow)';
        });
    });

    // Add parallax effect to background elements
    window.addEventListener('mousemove', (e) => {
        const mouseX = e.clientX / window.innerWidth;
        const mouseY = e.clientY / window.innerHeight;
        
        document.querySelector('#bbi-startup-services-section-2024::before').style.transform = `translate(${mouseX * 20}px, ${mouseY * 20}px)`;
        document.querySelector('#bbi-startup-services-section-2024::after').style.transform = `translate(${-mouseX * 20}px, ${-mouseY * 20}px)`;
    });

    // Add scroll reveal animation
    function revealOnScroll() {
        const cards = document.querySelectorAll('.bbi-startup-service-card-2024');
        cards.forEach((card, index) => {
            const cardTop = card.getBoundingClientRect().top;
            const cardBottom = card.getBoundingClientRect().bottom;
            
            if (cardTop < window.innerHeight && cardBottom > 0) {
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            }
        });
    }

    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll(); // Call once on load

    // Add typing effect to section title
    function typeEffect(element, text, speed) {
        let i = 0;
        element.innerHTML = '';
        function type() {
            if (i < text.length) {
                element.innerHTML += text.charAt(i);
                i++;
                setTimeout(type, speed);
            }
        }
        type();
    }

    const sectionTitle = document.querySelector('.bbi-startup-section-title-2024');
    typeEffect(sectionTitle, sectionTitle.textContent, 50);

    // Add pulsating effect to CTA button
    function pulsateCTA() {
        ctaButton.classList.add('bbi-startup-pulsate-2024');
        setTimeout(() => {
            ctaButton.classList.remove('bbi-startup-pulsate-2024');
        }, 1000);
    }

    setInterval(pulsateCTA, 3000);

    // Add confetti effect on CTA button click
    ctaButton.addEventListener('click', (e) => {
        e.preventDefault();
        createConfetti();
    });

    function createConfetti() {
        const confettiCount = 100;
        const confettiColors = ['#f77f00', '#f28a00', '#86cd02', '#003049'];
        
        for (let i = 0; i < confettiCount; i++) {
            const confetti = document.createElement('div');
            confetti.classList.add('bbi-startup-confetti-2024');
            confetti.style.backgroundColor = confettiColors[Math.floor(Math.random() * confettiColors.length)];
            confetti.style.left = `${Math.random() * 100}%`;
            confetti.style.animationDuration = `${Math.random() * 3 + 2}s`;
            confetti.style.animationDelay = `${Math.random() * 2}s`;
            document.body.appendChild(confetti);

            setTimeout(() => {
                confetti.remove();
            }, 5000);
        }
    }
      // Update the CTA button click event to use the new confetti function
    ctaButton.addEventListener('click', (e) => {
        e.preventDefault();
        createConfetti(e.clientX, e.clientY);
    });
});

