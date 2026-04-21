<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="QuickPOS - The modern point of sale system for businesses. Fast, reliable, and easy to use POS software with inventory management, sales analytics, and seamless integrations.">
    <title>QuickPOS — The Last POS System You'll Ever Need</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- ========== NAVIGATION & HEADER (Epic 1) ========== -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="#" class="nav-logo">
                <div class="logo-icon">
                    <i class="fas fa-cash-register"></i>
                </div>
                <span class="logo-text">Quick<span class="logo-accent">POS</span></span>
            </a>

            <ul class="nav-links" id="navLinks">
                <li><a href="#features" class="nav-link">Features</a></li>
                <li><a href="#pricing" class="nav-link">Pricing</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>

            <div class="nav-actions">
                <a href="#contact" class="btn btn-outline-nav">Log In</a>
                <a href="#pricing" class="btn btn-primary-nav">Sign Up <i class="fas fa-arrow-right"></i></a>
            </div>

            <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
                <span class="hamburger"></span>
            </button>
        </div>
    </nav>

<!-- ========== HERO SECTION (Epic 2) ========== -->
    <section class="hero" id="hero">
        <div class="hero-bg-effects">
            <div class="hero-orb hero-orb-1"></div>
            <div class="hero-orb hero-orb-2"></div>
            <div class="hero-orb hero-orb-3"></div>
            <div class="hero-grid-overlay"></div>
        </div>

        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-bolt"></i>
                    <span>Trusted by 10,000+ businesses worldwide</span>
                </div>

                <h1 class="hero-title">
                    The Last <span class="gradient-text">POS System</span> You'll Ever Need
                </h1>

                <p class="hero-subtitle">
                    Streamline your sales, manage inventory, and grow your business with the most intuitive 
                    point-of-sale platform. Built for speed, designed for simplicity.
                </p>

                <div class="hero-cta-group">
                    <a href="#pricing" class="btn btn-primary btn-lg">
                        Get Started for Free
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#features" class="btn btn-ghost btn-lg">
                        <i class="fas fa-play-circle"></i>
                        Watch Demo
                    </a>
                </div>

                <div class="hero-stats">
                    <div class="hero-stat">
                        <span class="hero-stat-number">10K+</span>
                        <span class="hero-stat-label">Active Users</span>
                    </div>
                    <div class="hero-stat-divider"></div>
                    <div class="hero-stat">
                        <span class="hero-stat-number">99.9%</span>
                        <span class="hero-stat-label">Uptime</span>
                    </div>
                    <div class="hero-stat-divider"></div>
                    <div class="hero-stat">
                        <span class="hero-stat-number">4.9★</span>
                        <span class="hero-stat-label">User Rating</span>
                    </div>
                </div>
            </div>

            <div class="hero-visual">
                <div class="hero-mockup">
                    <div class="mockup-screen">
                        <div class="mockup-header">
                            <div class="mockup-dots">
                                <span class="dot dot-red"></span>
                                <span class="dot dot-yellow"></span>
                                <span class="dot dot-green"></span>
                            </div>
                            <span class="mockup-title">QuickPOS Dashboard</span>
                        </div>
                        <div class="mockup-body">
                            <div class="mockup-sidebar">
                                <div class="sidebar-item active"><i class="fas fa-th-large"></i></div>
                                <div class="sidebar-item"><i class="fas fa-shopping-cart"></i></div>
                                <div class="sidebar-item"><i class="fas fa-box"></i></div>
                                <div class="sidebar-item"><i class="fas fa-chart-bar"></i></div>
                                <div class="sidebar-item"><i class="fas fa-cog"></i></div>
                            </div>
                            <div class="mockup-content">
                                <div class="mockup-stat-row">
                                    <div class="mockup-stat-card card-blue">
                                        <span class="msc-label">Today's Sales</span>
                                        <span class="msc-value">$2,847</span>
                                        <span class="msc-change positive">↑ 12%</span>
                                    </div>
                                    <div class="mockup-stat-card card-purple">
                                        <span class="msc-label">Orders</span>
                                        <span class="msc-value">148</span>
                                        <span class="msc-change positive">↑ 8%</span>
                                    </div>
                                    <div class="mockup-stat-card card-green">
                                        <span class="msc-label">Revenue</span>
                                        <span class="msc-value">$12.4K</span>
                                        <span class="msc-change positive">↑ 24%</span>
                                    </div>
                                </div>
                                <div class="mockup-chart">
                                    <div class="chart-bar" style="height: 40%"></div>
                                    <div class="chart-bar" style="height: 65%"></div>
                                    <div class="chart-bar" style="height: 55%"></div>
                                    <div class="chart-bar" style="height: 80%"></div>
                                    <div class="chart-bar active" style="height: 95%"></div>
                                    <div class="chart-bar" style="height: 70%"></div>
                                    <div class="chart-bar" style="height: 60%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mockup-glow"></div>
                </div>
            </div>
        </div>
    </section>

     <!-- ========== FEATURES SECTION (Epic 3) ========== -->
    <section class="features" id="features">
        <div class="section-container">
            <div class="section-header">
                <span class="section-badge">Features</span>
                <h2 class="section-title">Everything You Need to <span class="gradient-text">Run Your Business</span></h2>
                <p class="section-subtitle">Powerful tools designed to simplify your daily operations and help you focus on what matters most — your customers.</p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon icon-blue">
                        <i class="fas fa-boxes-stacked"></i>
                    </div>
                    <h3 class="feature-title">Inventory Management</h3>
                    <p class="feature-desc">Track stock levels in real-time, set automatic reorder alerts, and manage multiple warehouse locations from a single dashboard.</p>
                    <a href="#" class="feature-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon icon-purple">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="feature-title">Sales Analytics</h3>
                    <p class="feature-desc">Get deep insights into your sales trends, customer behavior, and revenue growth with intuitive charts and detailed reports.</p>
                    <a href="#" class="feature-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon icon-green">
                        <i class="fas fa-plug"></i>
                    </div>
                    <h3 class="feature-title">Easy Integration</h3>
                    <p class="feature-desc">Connect seamlessly with your favorite payment processors, accounting software, and e-commerce platforms in minutes.</p>
                    <a href="#" class="feature-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon icon-orange">
                        <i class="fas fa-shield-halved"></i>
                    </div>
                    <h3 class="feature-title">Secure Payments</h3>
                    <p class="feature-desc">PCI-compliant payment processing with end-to-end encryption. Accept cards, digital wallets, and contactless payments safely.</p>
                    <a href="#" class="feature-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== PRICING SECTION (Epic 4) ========== -->
    <section class="pricing" id="pricing">
        <div class="section-container">
            <div class="section-header">
                <span class="section-badge">Pricing</span>
                <h2 class="section-title">Simple, Transparent <span class="gradient-text">Pricing</span></h2>
                <p class="section-subtitle">Choose the plan that fits your business. No hidden fees, no surprises. Start free and upgrade as you grow.</p>
            </div>

            <div class="pricing-grid">
                <!-- Basic Plan -->
                <div class="pricing-card">
                    <div class="pricing-header">
                        <span class="pricing-plan">Basic</span>
                        <p class="pricing-desc">Perfect for small businesses getting started</p>
                    </div>
                    <div class="pricing-amount">
                        <span class="pricing-currency">$</span>
                        <span class="pricing-price">29</span>
                        <span class="pricing-period">/month</span>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> 1 Register</li>
                        <li><i class="fas fa-check"></i> Up to 500 products</li>
                        <li><i class="fas fa-check"></i> Basic sales reports</li>
                        <li><i class="fas fa-check"></i> Email support</li>
                        <li class="disabled"><i class="fas fa-xmark"></i> Multi-location</li>
                        <li class="disabled"><i class="fas fa-xmark"></i> API access</li>
                    </ul>
                    <a href="#contact" class="btn btn-outline btn-block">Get Started</a>
                </div>

                <!-- Pro Plan -->
                <div class="pricing-card pricing-popular">
                    <div class="popular-badge">Most Popular</div>
                    <div class="pricing-header">
                        <span class="pricing-plan">Pro</span>
                        <p class="pricing-desc">For growing businesses that need more</p>
                    </div>
                    <div class="pricing-amount">
                        <span class="pricing-currency">$</span>
                        <span class="pricing-price">79</span>
                        <span class="pricing-period">/month</span>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> 5 Registers</li>
                        <li><i class="fas fa-check"></i> Unlimited products</li>
                        <li><i class="fas fa-check"></i> Advanced analytics</li>
                        <li><i class="fas fa-check"></i> Priority support</li>
                        <li><i class="fas fa-check"></i> Multi-location</li>
                        <li class="disabled"><i class="fas fa-xmark"></i> API access</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </div>

                <!-- Enterprise Plan -->
                <div class="pricing-card">
                    <div class="pricing-header">
                        <span class="pricing-plan">Enterprise</span>
                        <p class="pricing-desc">For established businesses at scale</p>
                    </div>
                    <div class="pricing-amount">
                        <span class="pricing-currency">$</span>
                        <span class="pricing-price">199</span>
                        <span class="pricing-period">/month</span>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> Unlimited Registers</li>
                        <li><i class="fas fa-check"></i> Unlimited products</li>
                        <li><i class="fas fa-check"></i> Custom reports</li>
                        <li><i class="fas fa-check"></i> 24/7 phone support</li>
                        <li><i class="fas fa-check"></i> Multi-location</li>
                        <li><i class="fas fa-check"></i> Full API access</li>
                    </ul>
                    <a href="#contact" class="btn btn-outline btn-block">Contact Sales</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
