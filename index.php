<?php include 'includes/data.php'; ?>
<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section id="home" class="hero-section text-center">
    <div class="hero-bg"></div>
    <div class="container z-1 position-relative">
        <h1 class="hero-title mb-3 element-animate">I am <?php echo $cv_data['header']['name']; ?></h1>
        <h3 class="text-white mb-4 fw-light element-animate delay-200"><?php echo $cv_data['header']['title']; ?></h3>
        <div class="d-flex justify-content-center gap-3 element-animate delay-400">
            <a href="#projects" class="btn btn-primary btn-lg rounded-pill px-5">View My Work</a>
            <a href="#contact" class="btn btn-outline-light btn-lg rounded-pill px-5">Contact Me</a>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="glass-card p-5 h-100 position-relative animate-on-scroll slide-up">
                    <h2 class="display-5 fw-bold mb-4 text-white">About Me</h2>
                    <p class="lead text-secondary"><?php echo $cv_data['summary']; ?></p>
                </div>
            </div>
            <div class="col-lg-6">
                 <!-- Placeholder for a stylish graphic or image if the user provides one -->
                 <div class="glass-card p-5 text-center animate-on-scroll slide-up delay-200">
                     <i class="fas fa-rocket fa-5x text-primary mb-3"></i>
                     <h4 class="text-white">Innovation First</h4>
                     <p class="text-secondary">Bridging AI Theory & Real-World Products</p>
                 </div>
            </div>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="py-5 bg-darker">
    <div class="container py-5">
        <h2 class="display-4 fw-bold text-center mb-5 text-white animate-on-scroll fade-in">Experience</h2>
        <div class="timeline">
            <?php foreach($cv_data['experience'] as $job): ?>
            <div class="row justify-content-center mb-5 animate-on-scroll slide-up">
                <div class="col-md-8">
                    <div class="glass-card p-4 position-relative">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3 class="h4 text-white mb-0"><?php echo $job['role']; ?> <span class="text-primary">@ <?php echo $job['company']; ?></span></h3>
                            <span class="badge bg-primary rounded-pill"><?php echo $job['dates']; ?></span>
                        </div>
                        <ul class="text-secondary">
                            <?php foreach($job['description'] as $desc): ?>
                            <li class="mb-2"><?php echo $desc; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-5">
    <div class="container py-5">
        <h2 class="display-4 fw-bold text-center mb-5 text-white animate-on-scroll fade-in">Featured Projects</h2>
        <div class="row g-4">
            <?php foreach($cv_data['projects'] as $index => $project): ?>
            <div class="col-md-6 col-lg-6">
                <div class="glass-card h-100 p-4 animate-on-scroll slide-up" style="transition-delay: <?php echo $index * 100; ?>ms">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h3 class="h4 text-white"><?php echo $project['name']; ?></h3>
                        <i class="fas fa-folder text-secondary"></i>
                    </div>
                    <p class="text-secondary mb-3"><?php echo $project['description']; ?></p>
                    <p class="text-white small mb-3"><strong>Key Achievement:</strong> <?php echo $project['achievement']; ?></p>
                    <div class="mt-auto">
                        <span class="text-primary small"><?php echo $project['stack']; ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-5">
    <div class="container py-5">
        <h2 class="display-4 fw-bold text-center mb-5 text-white animate-on-scroll fade-in">Technical Arsenal</h2>
        <div class="row justify-content-center">
            <?php foreach($cv_data['skills'] as $category => $items): ?>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="glass-card p-4 h-100 animate-on-scroll zoom-in">
                    <h4 class="text-white mb-3 border-bottom border-secondary pb-2"><?php echo $category; ?></h4>
                    <div>
                        <?php foreach($items as $item): ?>
                        <span class="skill-tag"><?php echo $item; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Education -->
<section id="education" class="py-5 bg-darker">
    <div class="container py-5 text-center">
         <h2 class="display-4 fw-bold text-center mb-5 text-white animate-on-scroll fade-in">Education</h2>
         <div class="glass-card p-5 d-inline-block text-start animate-on-scroll slide-up">
             <h3 class="text-white"><?php echo $cv_data['education']['degree']; ?></h3>
             <h5 class="text-primary mb-3"><?php echo $cv_data['education']['university']; ?></h5>
             <p class="text-secondary mb-4"><?php echo $cv_data['education']['status']; ?></p>
             
             <h6 class="text-white mb-3">Relevant Modules:</h6>
             <div class="row g-2">
                 <?php foreach($cv_data['education']['modules'] as $module): ?>
                 <div class="col-auto">
                     <span class="badge bg-secondary fw-normal"><?php echo $module; ?></span>
                 </div>
                 <?php endforeach; ?>
             </div>
         </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
