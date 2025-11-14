-- Sample Data for IT Consultancy Website
-- Run this after creating the schema

USE it_consultancy_db;

-- Insert sample case studies
INSERT INTO case_studies (title, description, client_name, technologies, featured) VALUES
('E-Commerce Platform Migration', 'Successfully migrated a legacy e-commerce platform to a modern cloud-based solution, resulting in 50% faster load times and improved scalability.', 'RetailCorp Inc.', 'AWS, React, Node.js, PostgreSQL', TRUE),
('Enterprise Cloud Infrastructure', 'Designed and implemented a comprehensive cloud infrastructure for a Fortune 500 company, reducing IT costs by 40%.', 'TechGlobal Solutions', 'AWS, Docker, Kubernetes, Terraform', TRUE),
('Mobile Banking Application', 'Developed a secure mobile banking application with biometric authentication, serving over 100,000 active users.', 'FinanceFirst Bank', 'React Native, Node.js, MongoDB, AWS', TRUE),
('Digital Transformation Initiative', 'Led a complete digital transformation for a manufacturing company, automating 80% of manual processes.', 'ManufacturingPlus', 'Python, Django, PostgreSQL, Docker', FALSE),
('Healthcare Management System', 'Built a comprehensive healthcare management system with HIPAA compliance, improving patient care efficiency by 60%.', 'HealthCare Partners', 'PHP, MySQL, React, AWS', FALSE);

-- Insert sample testimonials
INSERT INTO testimonials (client_name, company, testimonial, rating, featured) VALUES
('John Anderson', 'RetailCorp Inc.', 'TechConsult Pro transformed our business operations. Their expertise in cloud solutions helped us scale efficiently and reduce costs significantly. Highly recommended!', 5, TRUE),
('Sarah Martinez', 'TechGlobal Solutions', 'Outstanding service and technical expertise. The team delivered our project on time and exceeded our expectations. We\'re already planning our next project with them.', 5, TRUE),
('Michael Chen', 'FinanceFirst Bank', 'Professional, reliable, and innovative. They understood our requirements perfectly and delivered a solution that has revolutionized our customer experience.', 5, TRUE),
('Emily Johnson', 'StartupXYZ', 'As a startup, we needed cost-effective solutions. TechConsult Pro provided exactly that - high-quality work at reasonable prices. Great partnership!', 5, FALSE),
('David Williams', 'Enterprise Solutions Ltd.', 'Their attention to detail and commitment to quality is impressive. The support team is always responsive and helpful.', 4, FALSE);

-- Insert sample blog posts
INSERT INTO posts (title, slug, excerpt, content, author, published_at) VALUES
('The Future of Cloud Computing in 2024', 'future-of-cloud-computing-2024', 'Explore the latest trends and innovations shaping the cloud computing landscape in 2024.', 'Cloud computing continues to evolve at a rapid pace. In 2024, we\'re seeing several key trends emerge that will shape the future of how businesses leverage cloud infrastructure...', 'John Smith', NOW()),
('Best Practices for Web Application Security', 'web-application-security-best-practices', 'Learn essential security practices to protect your web applications from common vulnerabilities.', 'Security is paramount in today\'s digital landscape. This article covers the fundamental security practices every web developer should implement...', 'Sarah Johnson', DATE_SUB(NOW(), INTERVAL 5 DAY)),
('Digital Transformation: A Complete Guide', 'digital-transformation-complete-guide', 'A comprehensive guide to digital transformation strategies for modern businesses.', 'Digital transformation is no longer optional - it\'s essential for businesses that want to remain competitive. This guide walks you through the entire process...', 'Mike Davis', DATE_SUB(NOW(), INTERVAL 10 DAY)),
('Why Your Business Needs Cloud Migration', 'why-business-needs-cloud-migration', 'Discover the benefits of migrating your business infrastructure to the cloud.', 'Cloud migration offers numerous advantages including cost savings, scalability, and improved security. Learn why now is the perfect time to make the move...', 'John Smith', DATE_SUB(NOW(), INTERVAL 15 DAY));

