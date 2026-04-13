# 🚀 AWS DevOps Project

## 📌 Overview

This project demonstrates a highly available, scalable, and secure AWS architecture using real-world DevOps practices. It includes a dynamic PHP web application connected to an AWS RDS MySQL database.

---

## 🏗️ Architecture

![Architecture](architecture.png)

---

## 🔥 Features

* Application Load Balancer (ALB)
* Auto Scaling Group (ASG)
* Private EC2 instances (secured)
* Bastion Host for SSH access
* RDS MySQL database
* NAT Gateway for internet access
* CloudWatch monitoring
* SNS alerts (email notifications)
* Dynamic PHP web application (form + database)

---

## 🌐 Architecture Flow

User → ALB → Target Group → EC2 (Auto Scaling) → RDS

---

## 🛠️ Technologies Used

* AWS (EC2, VPC, RDS, ALB, ASG, CloudWatch, SNS, IAM)
* Linux (Ubuntu)
* Apache Web Server
* PHP
* MySQL

---

## 📸 Screenshots

### 🔹 Application Load Balancer Output

![ALB](screenshots/alb-working.png)

### 🔹 RDS Database

![RDS](screenshots/rds-data.png)

### 🔹 Auto Scaling Group

![ASG](screenshots/asg-instances.png)

### 🔹 EC2 Instances

![EC2](screenshots/ec2.png)

---

## 💡 Key Learnings

* Designed scalable cloud architecture
* Implemented load balancing and auto scaling
* Secured infrastructure using private subnets
* Integrated monitoring and alerting
* Built a full-stack web app with AWS backend

---

## 🚀 How to Run

1. Launch VPC with public & private subnets
2. Create EC2 instances (Bastion + Private)
3. Setup RDS MySQL database
4. Configure ALB & Target Group
5. Create Auto Scaling Group
6. Deploy PHP application
7. Access using ALB DNS

---

## 👨‍💻 Author

**Piyush Rai**
