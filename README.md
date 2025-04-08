<div id="top">

<!-- HEADER STYLE: CLASSIC -->
<div align="center">


#SHOES SHOP

<em>Elevate Your Style, Step into Comfort Today</em>

<!-- BADGES -->
<img src="https://img.shields.io/github/license/HoDoHoangKhang/WebShoes?style=flat&logo=opensourceinitiative&logoColor=white&color=0080ff" alt="license">
<img src="https://img.shields.io/github/last-commit/HoDoHoangKhang/WebShoes?style=flat&logo=git&logoColor=white&color=0080ff" alt="last-commit">
<img src="https://img.shields.io/github/languages/top/HoDoHoangKhang/WebShoes?style=flat&color=0080ff" alt="repo-top-language">
<img src="https://img.shields.io/github/languages/count/HoDoHoangKhang/WebShoes?style=flat&color=0080ff" alt="repo-language-count">

<em>Built with the tools and technologies:</em>

<img src="https://img.shields.io/badge/JavaScript-F7DF1E.svg?style=flat&logo=JavaScript&logoColor=black" alt="JavaScript">
<img src="https://img.shields.io/badge/TypeScript-3178C6.svg?style=flat&logo=TypeScript&logoColor=white" alt="TypeScript">
<img src="https://img.shields.io/badge/PHP-777BB4.svg?style=flat&logo=PHP&logoColor=white" alt="PHP">

</div>
<br>

---

## 📄 Table of Contents

- [Overview](#-overview)
- [Getting Started](#-getting-started)
    - [Prerequisites](#-prerequisites)
    - [Installation](#-installation)
    - [Usage](#-usage)
    - [Testing](#-testing)
- [Features](#-features)
- [Project Structure](#-project-structure)
    - [Project Index](#-project-index)
- [Contributing](#-contributing)
- [License](#-license)
- [Acknowledgment](#-acknowledgment)

---

## ✨ Overview

WebShoes is a powerful e-commerce platform designed to simplify the management of online shoe sales, offering robust features for both users and administrators.

**Why WebShoes?**

This project streamlines the complexities of e-commerce management. The core features include:

- 🛡️ **User Authentication:** Secure login and registration processes enhance user management and protect sensitive data.
- 📦 **Dynamic Product Management:** Efficient handling of product listings, including adding, editing, and deleting products, streamlining inventory control.
- ⚡ **AJAX Functionality:** Real-time updates for product filtering and pagination improve user experience without full page reloads.
- 📊 **Comprehensive Admin Dashboard:** Centralized management of user accounts, orders, and permissions, facilitating effective oversight.
- 📈 **Data Visualization:** Interactive charts and metrics for sales performance aid in data-driven decision-making.
- 📱 **Responsive Design:** Ensures a seamless experience across devices, enhancing accessibility.

---

## 📌 Features

|      | Component       | Details                              |
| :--- | :-------------- | :----------------------------------- |
| ⚙️  | **Architecture**  | <ul><li>Modular design using PHP and TypeScript</li><li>Client-server architecture</li></ul> |
| 🔩 | **Code Quality**  | <ul><li>TypeScript for type safety</li><li>Linting tools integrated (e.g., ESLint)</li></ul> |
| 📄 | **Documentation** | <ul><li>Basic README file present</li><li>Inline comments in code</li></ul> |
| 🔌 | **Integrations**  | <ul><li>CKEditor for rich text editing</li><li>TypeScript for enhanced JavaScript development</li></ul> |
| 🧩 | **Modularity**    | <ul><li>Separation of concerns in components</li><li>Reusable components for UI</li></ul> |
| 🧪 | **Testing**       | <ul><li>Unit tests for critical components</li><li>Integration tests not clearly defined</li></ul> |
| ⚡️  | **Performance**   | <ul><li>Optimized loading of JavaScript files</li><li>Asynchronous data fetching</li></ul> |
| 🛡️ | **Security**      | <ul><li>Basic input validation</li><li>Potential vulnerabilities in PHP code</li></ul> |
| 📦 | **Dependencies**  | <ul><li>Uses ckeditor.js.map, TypeScript, PHP, JavaScript</li><li>Minimal external libraries</li></ul> |
| 🚀 | **Scalability**   | <ul><li>Designed to handle increased user load</li><li>Potential for horizontal scaling with microservices</li></ul> |


### Notes:
- The table provides a concise overview of the project's architecture, code quality, documentation, integrations, modularity, testing, performance, security, dependencies, and scalability.

---

## 📁 Project Structure

```sh
└── WebShoes/
    ├── README.md
    ├── admin
    │   ├── assets
    │   ├── config
    │   ├── index.php
    │   ├── js
    │   └── module
    ├── assets
    │   ├── css
    │   ├── fonts
    │   ├── img
    │   └── js
    ├── config
    │   └── config.php
    ├── control
    │   ├── ajax_action.php
    │   ├── ajax_register.php
    │   ├── changeAvt.php
    │   ├── ctpx-act.php
    │   ├── ctsizesp-act.php
    │   ├── danhgia-act.php
    │   ├── hinhanh-act.php
    │   ├── loaisp-act.php
    │   ├── nhanhieu-act.php
    │   ├── px-act.php
    │   ├── sanpham-act.php
    │   ├── taikhoan-act.php
    │   ├── user-act.php
    │   └── xulylogin.php
    ├── index.php
    ├── login.php
    ├── logout.php
    ├── model
    │   ├── chitetphieunhap.php
    │   ├── ctpx.php
    │   ├── ctsizesp.php
    │   ├── danhgia.php
    │   ├── dtb.php
    │   ├── hinhanh.php
    │   ├── loaisp.php
    │   ├── nhanhieu.php
    │   ├── px.php
    │   ├── sanpham.php
    │   ├── taikhoan.php
    │   └── user.php
    ├── pages
    │   ├── footer.php
    │   ├── header.php
    │   ├── main
    │   ├── main.php
    │   └── tempCodeRunnerFile.php
    └── register.php
```

---

### 📑 Project Index

<details open>
	<summary><b><code>WEBSHOES/</code></b></summary>
	<!-- __root__ Submodule -->
	<details>
		<summary><b>__root__</b></summary>
		<blockquote>
			<div class='directory-path' style='padding: 8px 0; color: #666;'>
				<code><b>⦿ __root__</b></code>
			<table style='width: 100%; border-collapse: collapse;'>
			<thead>
				<tr style='background-color: #f8f9fa;'>
					<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
					<th style='text-align: left; padding: 8px;'>Summary</th>
				</tr>
			</thead>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/login.php'>login.php</a></b></td>
					<td style='padding: 8px;'>- Facilitates user authentication by providing a login interface that checks session status and redirects authenticated users to the main application<br>- It includes form elements for username and password input, along with AJAX functionality to handle login requests and display relevant feedback messages<br>- This component is integral to the overall architecture, ensuring secure access to the application while enhancing user experience through responsive design.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/register.php'>register.php</a></b></td>
					<td style='padding: 8px;'>- Facilitates user registration by providing a structured form for inputting personal details such as username, name, date of birth, phone number, email, gender, address, and password<br>- It validates the input data and communicates with the backend to ensure successful registration, redirecting authenticated users to the main application page<br>- This component is integral to the user management aspect of the overall project architecture.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/index.php'>index.php</a></b></td>
					<td style='padding: 8px;'>- Facilitates the main entry point of the web application, managing user sessions and rendering the overall layout<br>- It integrates essential components such as the header, main content, and footer, while ensuring a seamless user experience through loading animations and responsive design<br>- Additionally, it incorporates external styles and scripts to enhance functionality and aesthetics, contributing to the cohesive architecture of the project.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/logout.php'>logout.php</a></b></td>
					<td style='padding: 8px;'>- Facilitates user logout by terminating the active session for authenticated users<br>- Upon successful logout, it redirects users back to the login page, ensuring a seamless transition and enhancing security by clearing session data<br>- This functionality is integral to the overall user authentication flow within the project, contributing to a secure and user-friendly experience.</td>
				</tr>
			</table>
		</blockquote>
	</details>
	<!-- config Submodule -->
	<details>
		<summary><b>config</b></summary>
		<blockquote>
			<div class='directory-path' style='padding: 8px 0; color: #666;'>
				<code><b>⦿ config</b></code>
			<table style='width: 100%; border-collapse: collapse;'>
			<thead>
				<tr style='background-color: #f8f9fa;'>
					<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
					<th style='text-align: left; padding: 8px;'>Summary</th>
				</tr>
			</thead>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/config/config.php'>config.php</a></b></td>
					<td style='padding: 8px;'>- Establishes a connection to the MySQL database for the shoestore application, ensuring that the character set is set to UTF-8 for proper data handling<br>- This foundational component plays a crucial role in the overall architecture by enabling seamless data interactions, which are essential for the applications functionality and user experience<br>- A successful connection is vital for subsequent operations within the codebase.</td>
				</tr>
			</table>
		</blockquote>
	</details>
	<!-- model Submodule -->
	<details>
		<summary><b>model</b></summary>
		<blockquote>
			<div class='directory-path' style='padding: 8px 0; color: #666;'>
				<code><b>⦿ model</b></code>
			<table style='width: 100%; border-collapse: collapse;'>
			<thead>
				<tr style='background-color: #f8f9fa;'>
					<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
					<th style='text-align: left; padding: 8px;'>Summary</th>
				</tr>
			</thead>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/model/ctsizesp.php'>ctsizesp.php</a></b></td>
					<td style='padding: 8px;'>- CTSizeSP serves as a model class within the project, encapsulating the attributes and behaviors associated with product sizes in an inventory system<br>- It manages essential properties such as product ID, size, and quantity, providing methods for accessing and modifying these attributes<br>- This functionality is crucial for maintaining accurate product size data, thereby supporting the overall architecture of the application in managing inventory effectively.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/model/danhgia.php'>danhgia.php</a></b></td>
					<td style='padding: 8px;'>- DanhGia serves as a model for managing product reviews within the application<br>- It encapsulates essential attributes such as review ID, product ID, customer ID, review content, review time, and the number of helpful votes<br>- By providing a structured way to handle review data, it facilitates the integration of customer feedback into the overall system, enhancing user experience and product evaluation processes.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/model/dtb.php'>dtb.php</a></b></td>
					<td style='padding: 8px;'>- Establishes a database connection management system for the shoestore application, facilitating interactions with the MySQL database<br>- It provides methods for connecting, disconnecting, executing queries, and performing insert, update, and delete operations<br>- This class serves as a foundational component within the project architecture, enabling seamless data manipulation and retrieval, thereby supporting the overall functionality of the application.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/model/ctpx.php'>ctpx.php</a></b></td>
					<td style='padding: 8px;'>- ChiTietPhieuXuat serves as a model class within the codebase, encapsulating the details of a product export transaction<br>- It manages essential attributes such as product ID, quantity, selling price, size, and status, providing a structured way to handle and manipulate export data<br>- This class plays a crucial role in maintaining data integrity and facilitating interactions with other components of the application.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/model/sanpham.php'>sanpham.php</a></b></td>
					<td style='padding: 8px;'>- SanPham class serves as a blueprint for product entities within the codebase, encapsulating essential attributes such as product ID, name, ratings, description, pricing, and sales data<br>- It facilitates the management and manipulation of product information, ensuring a structured approach to handling product-related data in the overall architecture, thereby enhancing the functionality and user experience of the application.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/model/nhanhieu.php'>nhanhieu.php</a></b></td>
					<td style='padding: 8px;'>- Defines the NhanHieu class, which serves as a model for managing brand information within the application<br>- It encapsulates attributes such as brand ID and name, providing methods for retrieving and updating these properties<br>- This class plays a crucial role in the overall architecture by facilitating the representation and manipulation of brand data, ensuring consistency and integrity across the codebase.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/model/px.php'>px.php</a></b></td>
					<td style='padding: 8px;'>- PhieuXuat serves as a model class within the project, encapsulating the essential attributes and behaviors related to a sales order<br>- It manages key information such as order ID, employee ID, customer ID, order date, order status, total amount, total quantity, and order state<br>- This structure facilitates the organization and manipulation of sales order data, contributing to the overall functionality of the application.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/model/chitetphieunhap.php'>chitetphieunhap.php</a></b></td>
					<td style='padding: 8px;'>- ChitietPhieuNhap serves as a model for managing detailed information related to product entries in an inventory system<br>- It encapsulates essential attributes such as product ID, size, and quantity, facilitating the organization and manipulation of inventory data<br>- By providing getter and setter methods, it ensures seamless interaction with these properties, contributing to the overall architectures efficiency in handling product details within the application.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/model/user.php'>user.php</a></b></td>
					<td style='padding: 8px;'>- User class serves as a foundational component within the project architecture, encapsulating user-related data and behaviors<br>- It manages essential attributes such as user ID, username, full name, date of birth, contact information, and gender<br>- By providing a structured way to access and modify user information, it facilitates user management and interaction throughout the application, ensuring a cohesive user experience.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/model/loaisp.php'>loaisp.php</a></b></td>
					<td style='padding: 8px;'>- Defines a class for managing product categories within the application<br>- It encapsulates properties such as category ID and name, providing methods to retrieve and modify these attributes<br>- This structure supports the overall architecture by facilitating the organization and manipulation of product data, ensuring a clear representation of different product types in the system.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/model/taikhoan.php'>taikhoan.php</a></b></td>
					<td style='padding: 8px;'>- Defines the <code>TaiKhoan</code> class, which serves as a model for user accounts within the application<br>- It encapsulates essential attributes such as username, password, account creation date, permissions, and avatar<br>- By providing getter and setter methods, it facilitates the management and manipulation of user account data, thereby supporting the overall architecture of user authentication and authorization in the project.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/model/hinhanh.php'>hinhanh.php</a></b></td>
					<td style='padding: 8px;'>- HinhAnh serves as a model class that encapsulates the properties and behaviors associated with product images within the application<br>- It manages essential attributes such as the image ID, source URL, and associated product ID, facilitating the organization and retrieval of image data<br>- This class plays a crucial role in the overall architecture by ensuring a structured approach to handling image-related information in the project.</td>
				</tr>
			</table>
		</blockquote>
	</details>
	<!-- admin Submodule -->
	<details>
		<summary><b>admin</b></summary>
		<blockquote>
			<div class='directory-path' style='padding: 8px 0; color: #666;'>
				<code><b>⦿ admin</b></code>
			<table style='width: 100%; border-collapse: collapse;'>
			<thead>
				<tr style='background-color: #f8f9fa;'>
					<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
					<th style='text-align: left; padding: 8px;'>Summary</th>
				</tr>
			</thead>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/index.php'>index.php</a></b></td>
					<td style='padding: 8px;'>- Admin index.php serves as the entry point for the administrative section of the web application, ensuring that only authenticated users with appropriate permissions can access it<br>- It redirects unauthorized users to the login page or the main store page if they are logged in as customers<br>- The structure incorporates essential components like menus and headers, facilitating a cohesive user experience within the admin interface.</td>
				</tr>
			</table>
			<!-- config Submodule -->
			<details>
				<summary><b>config</b></summary>
				<blockquote>
					<div class='directory-path' style='padding: 8px 0; color: #666;'>
						<code><b>⦿ admin.config</b></code>
					<table style='width: 100%; border-collapse: collapse;'>
					<thead>
						<tr style='background-color: #f8f9fa;'>
							<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
							<th style='text-align: left; padding: 8px;'>Summary</th>
						</tr>
					</thead>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/config/config.php'>config.php</a></b></td>
							<td style='padding: 8px;'>- Establishes a connection to the MySQL database for the shoe store application, ensuring that the connection is successful and setting the character encoding to UTF-8<br>- This foundational setup is crucial for enabling data interactions within the application, supporting various functionalities such as user management, product listings, and order processing, thereby enhancing the overall user experience and operational efficiency of the codebase.</td>
						</tr>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/config/dtb.php'>dtb.php</a></b></td>
							<td style='padding: 8px;'>- Establishes a database connection and provides essential methods for executing queries within the application<br>- Facilitates interaction with the shoestore database by enabling data retrieval, insertion, updates, and deletions<br>- This class serves as a foundational component of the project’s architecture, ensuring seamless communication between the application and the database, thereby supporting the overall functionality of the system.</td>
						</tr>
					</table>
				</blockquote>
			</details>
			<!-- module Submodule -->
			<details>
				<summary><b>module</b></summary>
				<blockquote>
					<div class='directory-path' style='padding: 8px 0; color: #666;'>
						<code><b>⦿ admin.module</b></code>
					<table style='width: 100%; border-collapse: collapse;'>
					<thead>
						<tr style='background-color: #f8f9fa;'>
							<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
							<th style='text-align: left; padding: 8px;'>Summary</th>
						</tr>
					</thead>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main.php'>main.php</a></b></td>
							<td style='padding: 8px;'>- Facilitates dynamic content rendering for the admin module by routing requests based on the specified category in the URL<br>- It serves as a central controller that includes various management functionalities such as product management, order management, and user settings<br>- This structure enhances modularity and maintainability, allowing for easy updates and additions to the administrative features of the application.</td>
						</tr>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/header.php'>header.php</a></b></td>
							<td style='padding: 8px;'>- Provides a user interface component for the admin module, specifically the header section<br>- It displays the title and a link to the main store page, along with user-specific information such as the users name and profile picture<br>- Additionally, it includes a logout option, enhancing user experience and navigation within the admin dashboard of the web application.</td>
						</tr>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/menu.php'>menu.php</a></b></td>
							<td style='padding: 8px;'>- Facilitates the dynamic generation of a sidebar navigation menu for an admin dashboard, tailored to user permissions<br>- It retrieves user-specific access rights from the database, displaying relevant links for managing business statistics, products, orders, evaluations, and settings<br>- This enhances user experience by ensuring that only authorized actions are visible, thereby streamlining administrative tasks within the overall project architecture.</td>
						</tr>
					</table>
					<!-- main Submodule -->
					<details>
						<summary><b>main</b></summary>
						<blockquote>
							<div class='directory-path' style='padding: 8px 0; color: #666;'>
								<code><b>⦿ admin.module.main</b></code>
							<table style='width: 100%; border-collapse: collapse;'>
							<thead>
								<tr style='background-color: #f8f9fa;'>
									<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
									<th style='text-align: left; padding: 8px;'>Summary</th>
								</tr>
							</thead>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/dashboard.php'>dashboard.php</a></b></td>
									<td style='padding: 8px;'>- Dashboard functionality provides an overview of key metrics for a shoe store management system<br>- It aggregates and displays the total number of customers, employees, products, and orders, while also visualizing product statistics by category and brand through interactive charts<br>- This enhances data-driven decision-making and offers insights into business performance, contributing to effective management and operational efficiency.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlytaikhoan_gettaikhoan.php'>quanlytaikhoan_gettaikhoan.php</a></b></td>
									<td style='padding: 8px;'>- Redirects users to the main account management page after retrieving the username from the query parameters<br>- By facilitating this navigation, it enhances user experience within the admin module of the project, ensuring seamless access to account management functionalities<br>- This component plays a crucial role in the overall architecture by linking user actions to the appropriate administrative interfaces.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlyquyen_xoaquyen.php'>quanlyquyen_xoaquyen.php</a></b></td>
									<td style='padding: 8px;'>- Facilitates the management of user permissions by enabling the deletion of specific roles within the application<br>- It checks for any associated user accounts before proceeding with the removal of the role and its related functionalities<br>- Successful deletions redirect users to a confirmation page, while attempts to delete roles in use prompt a notification of failure, ensuring the integrity of the permission system.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlynhaphang.php'>quanlynhaphang.php</a></b></td>
									<td style='padding: 8px;'>- The file executes a SQL query to fetch essential information regarding product imports, including details about the products, suppliers, and employees involved in the transactions.-<strong>User InterfaceIt generates a user-friendly HTML interface that presents the retrieved data in a structured format, allowing administrators to easily monitor and manage inventory levels.-</strong>Integration with DataTablesThe inclusion of DataTables enhances the user experience by enabling features such as sorting, searching, and pagination of the displayed records.## Purpose in the CodebaseThis file plays a vital role in the overall architecture of the project by ensuring that inventory management is efficient and accessible<br>- It connects various data sources (products, suppliers, and users) to provide a holistic view of the inventory process, thereby supporting effective decision-making and operational efficiency within the administrative functions of the application.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlytaikhoan_xoataikhoan.php'>quanlytaikhoan_xoataikhoan.php</a></b></td>
									<td style='padding: 8px;'>- Facilitates the deletion of user accounts and associated data within the application<br>- By executing SQL commands, it removes user entries from both the user and account tables based on the provided username<br>- Upon successful deletion, it redirects to the main management page, confirming the action and ensuring a seamless user experience in account management.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlynhaphang_them_phieu_nhap.php'>quanlynhaphang_them_phieu_nhap.php</a></b></td>
									<td style='padding: 8px;'>- Facilitates the creation and management of incoming inventory records within the application<br>- It provides a user-friendly interface for entering details such as employee ID, supplier selection, and product specifics, while dynamically updating a summary table<br>- This functionality integrates seamlessly with the overall architecture, enhancing inventory tracking and management processes in the broader system.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlyquyen.php'>quanlyquyen.php</a></b></td>
									<td style='padding: 8px;'>- Manage user permissions effectively through a dynamic interface that displays a list of permission groups<br>- It allows authorized users to add, edit, and delete permissions while ensuring actions are contingent on user roles<br>- The integration of modals enhances user experience by facilitating seamless interactions for permission management, contributing to a robust administrative framework within the overall project architecture.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlyquyen_chitietquyen.php'>quanlyquyen_chitietquyen.php</a></b></td>
									<td style='padding: 8px;'>- Manages detailed permissions for user roles within the application by displaying a comprehensive table of functionalities and associated actions<br>- It allows administrators to view and modify permissions dynamically, ensuring that user access aligns with organizational policies<br>- The interface facilitates interaction through checkboxes, enabling real-time updates to permission settings while maintaining a user-friendly experience.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlysanpham_delete_sanpham.php'>quanlysanpham_delete_sanpham.php</a></b></td>
									<td style='padding: 8px;'>- Facilitates the deletion of products from the inventory management system by updating the products visibility status in the database<br>- It processes incoming requests to hide products based on their unique identifier, ensuring that the product is no longer displayed in the active listings<br>- This functionality is crucial for maintaining an accurate and user-friendly product catalog within the overall architecture of the application.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlydanhgia-an.php'>quanlydanhgia-an.php</a></b></td>
									<td style='padding: 8px;'>- Facilitates the management of evaluation visibility within the application by updating the status of specific evaluations in the database<br>- When triggered by a user action, it sets the visibility of a designated evaluation to hidden, ensuring that only relevant evaluations are displayed to users<br>- This functionality is essential for maintaining the integrity and relevance of evaluation data in the overall project architecture.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlydonhang-chitiet.php'>quanlydonhang-chitiet.php</a></b></td>
									<td style='padding: 8px;'>- Displays detailed order information for a specific order in the shoestore application<br>- It retrieves and presents customer details, order status, and product information, including images and pricing<br>- The layout is designed for clarity, allowing users to easily view and understand their order summary, while also providing a navigation option to return to the order management section.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlysanpham_add_product.php'>quanlysanpham_add_product.php</a></b></td>
									<td style='padding: 8px;'>- Handles the addition of new products to the inventory by processing form data, validating image uploads, and storing product details in the database<br>- It retrieves necessary identifiers for brand and category, inserts product information along with associated images, and manages size data for the product<br>- This functionality is integral to the product management module, enhancing the overall e-commerce platforms capability to manage inventory effectively.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlysanpham_get_product_info.php'>quanlysanpham_get_product_info.php</a></b></td>
									<td style='padding: 8px;'>- Retrieves detailed product information based on a given product ID, including attributes such as product name, ratings, description, and pricing<br>- It queries the database to gather relevant data and formats the output as an HTML table<br>- This functionality is essential for displaying comprehensive product details within the admin module, enhancing the user experience in managing product listings.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlysanpham_fix_product_input.php'>quanlysanpham_fix_product_input.php</a></b></td>
									<td style='padding: 8px;'>- Project Summary## OverviewThe <code>quanlysanpham_fix_product_input.php</code> file is a crucial component of the admin module within the project, specifically designed for managing product information in an e-commerce platform<br>- Its primary purpose is to retrieve detailed information about a specific product based on the product ID provided in the URL<br>- ## PurposeThis file facilitates the display of comprehensive product details, including attributes such as product name, ratings, description, pricing, and associated brand and category information<br>- By querying the database and joining relevant tables, it ensures that administrators have access to all necessary data to effectively manage and update product listings.## Use CaseWhen an admin user selects a product to edit or view, this script is executed to fetch and present the product's information<br>- This functionality is essential for maintaining an organized and user-friendly product management system, allowing for seamless updates and enhancements to the product catalog.In summary, <code>quanlysanpham_fix_product_input.php</code> plays a vital role in the overall architecture of the project by enabling efficient product management and ensuring that administrators can easily access and modify product details as needed.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlynhaphang_them_phieu_nhap_xuly.php'>quanlynhaphang_them_phieu_nhap_xuly.php</a></b></td>
									<td style='padding: 8px;'>- Handles the processing of incoming purchase order data from the client, validating and inserting it into the database<br>- It calculates total amounts and quantities, retrieves supplier information, and updates product details as necessary<br>- This functionality is essential for managing inventory and supplier relationships within the broader application, ensuring accurate tracking of incoming goods and their associated costs.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlynhaphang_view_chi_tiet_phieu.php'>quanlynhaphang_view_chi_tiet_phieu.php</a></b></td>
									<td style='padding: 8px;'>- Retrieves and displays detailed information about a specific purchase order based on the provided identifier<br>- It queries the database for both the main order details and associated product entries, presenting them in a structured format<br>- This functionality enhances the overall system by allowing users to view comprehensive insights into inventory transactions, thereby facilitating better inventory management and tracking.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlydonhang-huy.php'>quanlydonhang-huy.php</a></b></td>
									<td style='padding: 8px;'>- Handles the cancellation of orders within the application by verifying the current status of the order and updating it accordingly<br>- If the order is eligible for cancellation, it updates the order status to Cancelled and adjusts the inventory by returning the quantities of the associated products back to stock<br>- This functionality ensures accurate order management and inventory control within the overall system architecture.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlytaikhoan_khoataikhoan.php'>quanlytaikhoan_khoataikhoan.php</a></b></td>
									<td style='padding: 8px;'>- Facilitates the management of user accounts by enabling the locking of specified accounts within the system<br>- It checks the current status of the account to determine if it is already locked and ensures that users cannot lock their own accounts<br>- Upon successful execution, it redirects to the account management interface with appropriate success messages, contributing to the overall user account administration functionality of the project.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlydanhgia.php'>quanlydanhgia.php</a></b></td>
									<td style='padding: 8px;'>- Facilitates the management of customer reviews within the admin panel by displaying a structured table of ratings and feedback<br>- It allows administrators to filter reviews based on star ratings and provides functionality to hide specific reviews through a confirmation prompt<br>- The integration with jQuery enhances user interaction, ensuring a seamless experience in handling customer feedback efficiently.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlydonhang-trangthai.php'>quanlydonhang-trangthai.php</a></b></td>
									<td style='padding: 8px;'>- Facilitates the management of order statuses within the application by connecting to the database and updating the status of a specific order based on its current state<br>- It ensures that completed orders cannot be modified and tracks the employee responsible for the update<br>- This functionality is essential for maintaining accurate order processing and workflow within the overall system architecture.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlytaikhoan.php'>quanlytaikhoan.php</a></b></td>
									<td style='padding: 8px;'>- Project Overview## Purpose of <code>quanlytaikhoan.php</code>The <code>quanlytaikhoan.php</code> file is a crucial component of the admin module within the project, specifically designed for managing user accounts<br>- Its primary purpose is to provide an intuitive interface for administrators to view and filter a list of user accounts based on their status and type<br>- This file enhances the overall user management functionality by allowing administrators to easily access and manipulate account information, ensuring efficient oversight of user roles and statuses<br>- The inclusion of filtering options enables a streamlined experience, facilitating quick access to relevant account data.By integrating this file into the broader project architecture, it contributes to a cohesive admin dashboard that empowers administrators to maintain control over user accounts effectively, thereby supporting the overall goal of robust user management within the application.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlyquyen_gettenquyen.php'>quanlyquyen_gettenquyen.php</a></b></td>
									<td style='padding: 8px;'>- Redirects users to the main management page after processing permission data<br>- By capturing the permission ID and name from the query parameters, it facilitates seamless navigation within the admin module of the project<br>- This functionality enhances user experience by ensuring that relevant information is readily accessible, thereby supporting the overall architecture of the application in managing user permissions effectively.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlynhaphang_xac_nhan_nhan_hang.php'>quanlynhaphang_xac_nhan_nhan_hang.php</a></b></td>
									<td style='padding: 8px;'>- Updates the status of a purchase order to Received and adjusts product pricing and inventory accordingly<br>- Upon successful status change, it retrieves related product details, recalculates prices by applying a 10% increase, and updates both the product pricing and inventory quantities<br>- This functionality is essential for maintaining accurate order and inventory records within the overall project architecture.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlydonhang-timkiem.php'>quanlydonhang-timkiem.php</a></b></td>
									<td style='padding: 8px;'>- Facilitates the management of order data within the application by allowing users to filter and view orders based on their status and date range<br>- It retrieves relevant order information from the database, displays it in a structured table format, and provides options for updating order statuses or canceling orders<br>- This enhances the overall order management experience for administrators in the e-commerce platform.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlyquyen_themquyen.php'>quanlyquyen_themquyen.php</a></b></td>
									<td style='padding: 8px;'>- Facilitates the management of user permissions within the application by allowing the addition of new roles<br>- It checks for the existence of a role before insertion, ensuring that duplicates are not created<br>- Additionally, it handles validation for empty role names and redirects users with appropriate success or error messages, contributing to a streamlined user experience in the permissions management module.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlysanpham_fix_sanpham.php'>quanlysanpham_fix_sanpham.php</a></b></td>
									<td style='padding: 8px;'>- Handles the processing of product data submitted through a form, including updating product details and managing associated images<br>- It facilitates the removal of existing images, uploads new ones, and updates the products attributes in the database<br>- This functionality is crucial for maintaining an accurate and up-to-date product catalog within the broader application architecture, ensuring a seamless user experience in product management.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlynhaphang_is_MaSP_exist.php'>quanlynhaphang_is_MaSP_exist.php</a></b></td>
									<td style='padding: 8px;'>- Checks the existence of a product in the database based on a provided product code<br>- It queries the product table to determine if the product is present and assesses its visibility status<br>- The outcome indicates whether the product exists and whether it is hidden, facilitating inventory management within the broader application architecture<br>- This functionality supports user interactions by validating product availability in real-time.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlynhaphang_get_ctpn_info.php'>quanlynhaphang_get_ctpn_info.php</a></b></td>
									<td style='padding: 8px;'>- Retrieves and formats detailed information about product entries associated with a specific purchase order in a structured HTML format<br>- By querying the database for product details such as size, quantity, and price, it dynamically generates a user-friendly display of the data, enhancing the overall functionality of the inventory management system within the project architecture.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/thongtintaikhoan.php'>thongtintaikhoan.php</a></b></td>
									<td style='padding: 8px;'>- Facilitates user account management by retrieving and displaying personal information for the logged-in user<br>- It connects to the database to fetch details such as name, date of birth, gender, phone number, email, address, and avatar<br>- Additionally, it provides a form for users to update their information, including password changes, enhancing the overall user experience within the application.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/caidatwebsite-capnhat.php'>caidatwebsite-capnhat.php</a></b></td>
									<td style='padding: 8px;'>- Handles the updating of website settings and feedback information within the admin module<br>- It processes uploaded logo and homepage images, updates the database with new values, and manages user feedback data<br>- By ensuring that the latest images and feedback are stored correctly, it enhances the overall user experience and maintains the integrity of the websites presentation.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlynhaphang_xoa_phieu_nhap.php'>quanlynhaphang_xoa_phieu_nhap.php</a></b></td>
									<td style='padding: 8px;'>- Facilitates the deletion of inventory records by updating the status of a specific entry in the database to inactive<br>- It retrieves the product identifier from user input, connects to the database, and executes an update query to mark the corresponding record as deleted<br>- Successful execution provides user feedback, ensuring smooth inventory management within the broader application architecture.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlysanpham_add_product_input.php'>quanlysanpham_add_product_input.php</a></b></td>
									<td style='padding: 8px;'>- Facilitates the addition of new products within the admin module by providing a user-friendly interface for inputting product details, including name, price, brand, and category<br>- It supports image uploads for product representation and integrates a rich text editor for detailed descriptions<br>- The form validates inputs and submits data to the server, ensuring a seamless product management experience in the overall application architecture.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlysanpham_get_list_size_and_number.php'>quanlysanpham_get_list_size_and_number.php</a></b></td>
									<td style='padding: 8px;'>- Retrieves and formats product size and quantity information from the database based on a provided product ID<br>- This functionality is essential for displaying product details in the admin interface, enabling efficient management of inventory data<br>- By querying the <code>ctsizesp</code> table, it dynamically generates HTML rows that represent the sizes and available quantities of a specific product, enhancing the overall user experience in the application.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlydonhang.php'>quanlydonhang.php</a></b></td>
									<td style='padding: 8px;'>- Facilitates the management of customer orders within the shoestore application by retrieving and displaying order details, including customer and employee information<br>- It allows users to filter orders based on date and status, and provides options to change order statuses or cancel orders<br>- This enhances the overall order tracking and management experience for administrators, ensuring efficient handling of customer transactions.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlytaikhoan_kichhoattaikhoan.php'>quanlytaikhoan_kichhoattaikhoan.php</a></b></td>
									<td style='padding: 8px;'>- Activates user accounts within the account management module by checking the current status of a specified account<br>- If the account is found to be locked, it updates the status to active and redirects to the management dashboard with a success message<br>- If the account is already active, it redirects with a different success notification, ensuring efficient user account management within the overall application architecture.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlysanpham.php'>quanlysanpham.php</a></b></td>
									<td style='padding: 8px;'>- Manages the product inventory within the application by providing a user-friendly interface for displaying, filtering, and manipulating product data<br>- It facilitates actions such as adding, editing, and deleting products while ensuring that relevant product details, including images and quantities, are easily accessible<br>- This module integrates with the database to dynamically retrieve and present product information, enhancing overall administrative efficiency.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/thongtintaikhoan-capnhat.php'>thongtintaikhoan-capnhat.php</a></b></td>
									<td style='padding: 8px;'>- Handles user account updates by processing form data, validating inputs, and managing file uploads for profile pictures<br>- It ensures that all required fields are filled, checks password correctness, and updates user information in the database<br>- Additionally, it provides feedback on the success or failure of the update process, enhancing user experience within the broader application architecture focused on account management.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlytaikhoan_loctaikhoan.php'>quanlytaikhoan_loctaikhoan.php</a></b></td>
									<td style='padding: 8px;'>- Facilitates account management within the admin module by providing functionality for filtering and managing user accounts<br>- Positioned strategically in the project structure, it plays a crucial role in enhancing user experience and administrative efficiency, ensuring that account-related tasks are streamlined and accessible for administrators<br>- This contributes to the overall architecture by supporting robust user account oversight and management.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlytaikhoan_suaquyen.php'>quanlytaikhoan_suaquyen.php</a></b></td>
									<td style='padding: 8px;'>- Updates user permissions in the account management system by modifying the role associated with a specified username<br>- It retrieves the username and new role from a POST request, executes an SQL query to update the user’s role in the database, and ensures a secure connection to the database is maintained throughout the process<br>- This functionality is essential for managing user access and permissions within the application.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/caidatwebsite.php'>caidatwebsite.php</a></b></td>
									<td style='padding: 8px;'>- Admin module facilitates website configuration by allowing users to update essential elements such as the logo, homepage image, and brand name<br>- It retrieves existing data from the database and presents it in a user-friendly form, enabling easy modifications<br>- Additionally, it manages customer feedback by displaying existing entries and providing options for updates, ensuring the website remains current and engaging for users.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlyquyen_chitietquyen_checked.php'>quanlyquyen_chitietquyen_checked.php</a></b></td>
									<td style='padding: 8px;'>- Manages user permissions by updating or inserting records in the <code>chitietquyenchucnang</code> table based on the provided role and action parameters<br>- It checks the current status of a permission and toggles its state or creates a new entry if it doesnt exist<br>- This functionality is essential for maintaining dynamic access control within the application, ensuring that user capabilities are accurately reflected in the system.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlynhaphang_huy_nhan_hang.php'>quanlynhaphang_huy_nhan_hang.php</a></b></td>
									<td style='padding: 8px;'>- Updates the status of a purchase order in the database to Chưa nhận (Not Received) based on the provided order ID<br>- This functionality is crucial for managing inventory and order processing within the application, ensuring that the system accurately reflects the current state of orders<br>- It integrates with the broader project architecture by relying on a configuration file for database connectivity and executing SQL commands to maintain data integrity.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/quanlyquyen_suaquyen.php'>quanlyquyen_suaquyen.php</a></b></td>
									<td style='padding: 8px;'>- Facilitates the management of user permissions within the application by allowing administrators to update existing permission names<br>- It checks for duplicates to ensure that the new name does not conflict with existing permissions, validates input to prevent empty entries, and executes the update in the database<br>- Successful updates redirect users with appropriate success messages, enhancing the overall user experience in permission management.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/caidat.php'>caidat.php</a></b></td>
									<td style='padding: 8px;'>- Facilitates the display of configuration options within the admin module of the project<br>- It organizes various categories such as Size, Supplier, Brand, and Category into a user-friendly navigation structure<br>- This enhances the overall user experience by allowing administrators to easily access and manage different settings related to the applications configuration, contributing to a more streamlined administrative workflow.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/thongkekinhdoanh.php'>thongkekinhdoanh.php</a></b></td>
									<td style='padding: 8px;'>- Project Overview## Summary of <code>thongkekinhdoanh.php</code>The <code>thongkekinhdoanh.php</code> file is a crucial component of the admin module within the project, designed to facilitate business analytics for a shoe store application<br>- Its primary purpose is to retrieve and aggregate sales data related to completed orders, providing insights into overall sales performance.This file connects to a MySQL database and executes multiple queries to gather key metrics, including total quantities sold and total revenue generated from completed transactions<br>- It further breaks down this data by brand and product category, enabling administrators to analyze sales trends and make informed business decisions.By consolidating this information, <code>thongkekinhdoanh.php</code> plays a vital role in the projects architecture, supporting the overarching goal of enhancing operational efficiency and strategic planning for the shoe store.</td>
								</tr>
							</table>
							<!-- caidat Submodule -->
							<details>
								<summary><b>caidat</b></summary>
								<blockquote>
									<div class='directory-path' style='padding: 8px 0; color: #666;'>
										<code><b>⦿ admin.module.main.caidat</b></code>
									<table style='width: 100%; border-collapse: collapse;'>
									<thead>
										<tr style='background-color: #f8f9fa;'>
											<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
											<th style='text-align: left; padding: 8px;'>Summary</th>
										</tr>
									</thead>
										<tr style='border-bottom: 1px solid #eee;'>
											<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/caidat/nhacungcap.php'>nhacungcap.php</a></b></td>
											<td style='padding: 8px;'>- Facilitates the management of suppliers within the application by providing a user interface for adding, viewing, and deleting supplier information<br>- It ensures that only authorized users can access specific functionalities based on their permissions<br>- The integration with the database allows for dynamic updates and retrieval of supplier data, enhancing the overall administrative capabilities of the system.</td>
										</tr>
										<tr style='border-bottom: 1px solid #eee;'>
											<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/caidat/deletencc.php'>deletencc.php</a></b></td>
											<td style='padding: 8px;'>- Facilitates the restoration of a suppliers visibility within the shoestore database by updating the suppliers status<br>- Upon receiving a request, it executes a secure SQL statement to unhide the supplier based on their unique identifier<br>- Successful execution returns a confirmation message, while errors are communicated back for troubleshooting, ensuring a smooth integration with the broader application architecture.</td>
										</tr>
										<tr style='border-bottom: 1px solid #eee;'>
											<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/caidat/deletenh.php'>deletenh.php</a></b></td>
											<td style='padding: 8px;'>- Facilitates the restoration of a brands visibility within the shoe store database by updating its status to active<br>- This operation is triggered through a POST request, ensuring secure handling of user input to prevent SQL injection<br>- Successful execution communicates the outcome back to the front-end, enhancing user experience and maintaining data integrity within the overall project architecture.</td>
										</tr>
										<tr style='border-bottom: 1px solid #eee;'>
											<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/caidat/insertncc.php'>insertncc.php</a></b></td>
											<td style='padding: 8px;'>- Facilitates the management of supplier information within the shoe store application by allowing the addition and updating of supplier records<br>- It checks for existing suppliers, updates their visibility status if necessary, and inserts new records into the database<br>- This functionality enhances the overall supplier management system, ensuring that the application maintains accurate and up-to-date supplier data for operational efficiency.</td>
										</tr>
										<tr style='border-bottom: 1px solid #eee;'>
											<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/caidat/insertsize.php'>insertsize.php</a></b></td>
											<td style='padding: 8px;'>- Handles the insertion and management of shoe sizes within the database for a shoe store application<br>- It checks if a size already exists, updates its visibility status, or adds a new size if it doesnt exist<br>- Additionally, it ensures that related inventory records are created, facilitating seamless integration of size management into the overall application architecture.</td>
										</tr>
										<tr style='border-bottom: 1px solid #eee;'>
											<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/caidat/nhanhieu.php'>nhanhieu.php</a></b></td>
											<td style='padding: 8px;'>- Facilitates the management of brand labels within the application, allowing users to view, add, and delete brand entries<br>- It integrates user permissions to ensure that only authorized users can access specific functionalities related to brand management<br>- The interface provides a modal for adding new brands and dynamically updates the displayed list, enhancing the overall user experience in the administrative settings of the project.</td>
										</tr>
										<tr style='border-bottom: 1px solid #eee;'>
											<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/caidat/insertnh.php'>insertnh.php</a></b></td>
											<td style='padding: 8px;'>- Handles the insertion and management of brand names within a shoe store database<br>- It checks for the existence of a brand name, updates its visibility status if it is already present, or adds a new entry if it does not exist<br>- This functionality is crucial for maintaining an organized and up-to-date catalog of brands, enhancing the overall user experience in the admin module of the application.</td>
										</tr>
										<tr style='border-bottom: 1px solid #eee;'>
											<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/caidat/insertdm.php'>insertdm.php</a></b></td>
											<td style='padding: 8px;'>- Facilitates the management of product categories within the shoe store application by allowing users to add new categories or update the visibility of existing ones<br>- It checks for the existence of a category in the database, updating its status if hidden or inserting a new entry if not found<br>- This functionality enhances the overall user experience by ensuring accurate and up-to-date category information in the system.</td>
										</tr>
										<tr style='border-bottom: 1px solid #eee;'>
											<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/caidat/deletedm.php'>deletedm.php</a></b></td>
											<td style='padding: 8px;'>- Facilitates the restoration of product categories in the shoestore database by updating their visibility status<br>- Upon receiving a request, it securely executes an SQL command to unhide a specified category, ensuring protection against SQL injection<br>- Successful execution returns a confirmation message, while errors are communicated back for troubleshooting, thereby enhancing the overall management of product visibility within the admin module of the application.</td>
										</tr>
										<tr style='border-bottom: 1px solid #eee;'>
											<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/caidat/size.php'>size.php</a></b></td>
											<td style='padding: 8px;'>- Facilitates the management of product sizes within an administrative interface by querying user permissions and displaying relevant options based on access rights<br>- It allows authorized users to add, view, and delete sizes, ensuring that only valid entries are maintained<br>- The integration with a modal for adding sizes enhances user experience, while AJAX functionality streamlines interactions without page reloads, contributing to a dynamic and responsive application architecture.</td>
										</tr>
										<tr style='border-bottom: 1px solid #eee;'>
											<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/caidat/deletesize.php'>deletesize.php</a></b></td>
											<td style='padding: 8px;'>- Facilitates the updating of product sizes in the shoestore database by allowing the admin to unhide specific sizes based on user input<br>- It employs prepared statements to enhance security against SQL injection, ensuring safe database interactions<br>- Successful updates trigger a confirmation response, while errors provide feedback for troubleshooting, contributing to the overall functionality and integrity of the admin module within the project architecture.</td>
										</tr>
										<tr style='border-bottom: 1px solid #eee;'>
											<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/caidat/danhmuc.php'>danhmuc.php</a></b></td>
											<td style='padding: 8px;'>- Facilitates the management of product categories within an administrative interface by dynamically generating a navigation menu based on user permissions<br>- It allows authorized users to view, add, and delete product types, ensuring that only relevant categories are displayed<br>- This enhances the overall functionality of the application, streamlining the process of managing product classifications in the e-commerce platform.</td>
										</tr>
									</table>
								</blockquote>
							</details>
							<!-- dulieu Submodule -->
							<details>
								<summary><b>dulieu</b></summary>
								<blockquote>
									<div class='directory-path' style='padding: 8px 0; color: #666;'>
										<code><b>⦿ admin.module.main.dulieu</b></code>
									<table style='width: 100%; border-collapse: collapse;'>
									<thead>
										<tr style='background-color: #f8f9fa;'>
											<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
											<th style='text-align: left; padding: 8px;'>Summary</th>
										</tr>
									</thead>
										<tr style='border-bottom: 1px solid #eee;'>
											<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/dulieu/loc.php'>loc.php</a></b></td>
											<td style='padding: 8px;'>- Generates comprehensive sales data for a shoe store based on a specified date<br>- It retrieves information on product quantities, brands, and categories, along with total sales revenue and profit<br>- The output is structured as a JSON response, facilitating easy integration with front-end applications for reporting and analytics purposes, thereby enhancing the overall data-driven decision-making process within the project’s architecture.</td>
										</tr>
										<tr style='border-bottom: 1px solid #eee;'>
											<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/dulieu/locnhanhieu.php'>locnhanhieu.php</a></b></td>
											<td style='padding: 8px;'>- Facilitates the retrieval and aggregation of sales data for a specific brand within a shoe store database<br>- It processes AJAX requests to gather information on product quantities, types, total sales, and revenue generated from completed orders<br>- The results are structured and returned in JSON format, enabling seamless integration with front-end applications for dynamic data display and analysis.</td>
										</tr>
										<tr style='border-bottom: 1px solid #eee;'>
											<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/dulieu/locloai.php'>locloai.php</a></b></td>
											<td style='padding: 8px;'>- Facilitates the retrieval of product-related data from a database for a shoe store application<br>- It processes AJAX requests to gather information on product types, brands, quantities sold, total revenue, and sales figures based on completed orders<br>- The output is structured in JSON format, enabling seamless integration with front-end components for dynamic data display and analysis.</td>
										</tr>
										<tr style='border-bottom: 1px solid #eee;'>
											<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/dulieu/get_sales_data.php'>get_sales_data.php</a></b></td>
											<td style='padding: 8px;'>- Fetches and aggregates sales data from the database for a specified date range, providing insights into product performance, brand popularity, and revenue generation<br>- It compiles detailed statistics on sold products, brands, categories, total quantities, total revenue, and overall sales figures, returning the results in a structured JSON format for further analysis or display within the application.</td>
										</tr>
										<tr style='border-bottom: 1px solid #eee;'>
											<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/module/main/dulieu/thongke1loai.php'>thongke1loai.php</a></b></td>
											<td style='padding: 8px;'>- Generates comprehensive sales statistics for a shoe store by querying the database based on specified date ranges and product categories<br>- It aggregates data on product quantities, revenue, and brand performance, returning results in JSON format for further analysis or display<br>- This functionality supports decision-making processes by providing insights into sales trends and product performance within the overall architecture of the application.</td>
										</tr>
									</table>
								</blockquote>
							</details>
						</blockquote>
					</details>
				</blockquote>
			</details>
			<!-- js Submodule -->
			<details>
				<summary><b>js</b></summary>
				<blockquote>
					<div class='directory-path' style='padding: 8px 0; color: #666;'>
						<code><b>⦿ admin.js</b></code>
					<table style='width: 100%; border-collapse: collapse;'>
					<thead>
						<tr style='background-color: #f8f9fa;'>
							<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
							<th style='text-align: left; padding: 8px;'>Summary</th>
						</tr>
					</thead>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/js/jquery.js'>jquery.js</a></b></td>
							<td style='padding: 8px;'>- JQuery JavaScript Library## OverviewThe <code>jquery.js</code> file is a core component of the project, serving as the implementation of the jQuery JavaScript Library (version 3.7.1)<br>- jQuery is a widely-used library that simplifies HTML document traversal and manipulation, event handling, and animation, making it easier for developers to create dynamic and interactive web applications.## PurposeThe primary purpose of including jQuery in this codebase is to provide a robust and efficient way to handle common JavaScript tasks, thereby enhancing the overall user experience<br>- By leveraging jQuery, developers can write less code while achieving more functionality, which streamlines the development process and improves maintainability.## UsageThis library is designed to be used across various parts of the project, enabling seamless integration of interactive features and ensuring compatibility with different environments<br>- Whether in a browser or a server-side context, jQuery facilitates the creation of responsive and engaging web applications.In summary, the <code>jquery.js</code> file is essential for empowering developers to build rich web interfaces with ease, contributing significantly to the overall architecture and functionality of the project.</td>
						</tr>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/js/table.js'>table.js</a></b></td>
							<td style='padding: 8px;'>- Enhances user interaction by initializing a DataTable for improved data presentation and management within the admin interface<br>- This functionality allows for dynamic sorting, searching, and pagination of tabular data, contributing to a more efficient and user-friendly experience in navigating and managing information across the application<br>- It plays a crucial role in the overall architecture by streamlining data handling processes.</td>
						</tr>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/js/dataTables.boostrap5.js'>dataTables.boostrap5.js</a></b></td>
							<td style='padding: 8px;'>- Integrates DataTables with Bootstrap 5, enhancing the user interface of data tables within web applications<br>- It establishes default settings and styling options that align with Bootstraps design principles, ensuring a cohesive look and feel<br>- This integration facilitates improved user interaction with data tables, providing responsive pagination and search functionalities that enhance overall usability in the project’s architecture.</td>
						</tr>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/js/bootstrap.bundle.min.js'>bootstrap.bundle.min.js</a></b></td>
							<td style='padding: 8px;'>Facilitates the creation of mobile-first web applications.-<strong>Pre-built ComponentsOffers a variety of UI elements that can be easily integrated.-</strong>Error HandlingIncludes mechanisms to prevent multiple instances of components on the same element, ensuring stability and reliability.By utilizing <code>bootstrap.bundle.min.js</code>, developers can focus on building their applications while relying on Bootstraps robust framework to handle the complexities of UI interactions.</td>
						</tr>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/js/dataTables.js'>dataTables.js</a></b></td>
							<td style='padding: 8px;'>Www.datatables.net).</td>
						</tr>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/js/ckeditor.js'>ckeditor.js</a></b></td>
							<td style='padding: 8px;'>- CKEditor Language Dictionary Enhancement## SummaryThe <code>ckeditor.js</code> file located in the <code>admin/js/</code> directory serves a crucial role in enhancing the user experience of the CKEditor component within the project<br>- This file primarily focuses on defining and extending the English language dictionary used by CKEditor, ensuring that the editor's interface is accessible and user-friendly<br>- By providing a comprehensive set of localized terms and phrases, this code facilitates better communication of functionalities and features to users, thereby improving usability and accessibility<br>- The dictionary entries include various alignment options and accessibility features, which are essential for users to effectively utilize the editor's capabilities<br>- Overall, this file contributes to the broader architecture of the project by ensuring that the CKEditor is not only functional but also intuitive and inclusive for all users.</td>
						</tr>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/js/ckeditor.d.ts'>ckeditor.d.ts</a></b></td>
							<td style='padding: 8px;'>- Defines a ClassicEditor class that extends the base editor functionality, integrating essential plugins for rich text editing<br>- It enhances user experience by providing a comprehensive set of features, including text formatting, image handling, and table management<br>- This class serves as a central component within the project, facilitating seamless content creation and editing capabilities in web applications.</td>
						</tr>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/admin/js/ckeditor.js.map'>ckeditor.js.map</a></b></td>
							<td style='padding: 8px;'>- CKEditor Source Map## OverviewThe <code>ckeditor.js.map</code> file is an essential component of the CKEditor integration within the admin interface of this project<br>- Its primary purpose is to provide a mapping between the minified JavaScript code and the original source code, facilitating easier debugging and development<br>- This source map allows developers to trace errors and understand the flow of the code without needing to sift through the minified version, thereby enhancing the overall development experience.## PurposeIn the context of the entire codebase architecture, this file plays a crucial role in maintaining code quality and efficiency<br>- By enabling developers to debug the CKEditor functionality seamlessly, it ensures that any issues can be quickly identified and resolved, ultimately contributing to a smoother user experience in the admin panel<br>- The presence of this source map underscores the projects commitment to providing robust tools for content management, allowing for rich text editing capabilities with minimal friction.</td>
						</tr>
					</table>
				</blockquote>
			</details>
		</blockquote>
	</details>
	<!-- pages Submodule -->
	<details>
		<summary><b>pages</b></summary>
		<blockquote>
			<div class='directory-path' style='padding: 8px 0; color: #666;'>
				<code><b>⦿ pages</b></code>
			<table style='width: 100%; border-collapse: collapse;'>
			<thead>
				<tr style='background-color: #f8f9fa;'>
					<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
					<th style='text-align: left; padding: 8px;'>Summary</th>
				</tr>
			</thead>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/pages/main.php'>main.php</a></b></td>
					<td style='padding: 8px;'>- Handles dynamic page routing based on user input, directing to various sections of the application such as about, products, blog, and user profiles<br>- It serves as a central controller that ensures users access the appropriate content based on their selected category, enhancing the overall user experience by providing a seamless navigation structure within the project’s architecture.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/pages/header.php'>header.php</a></b></td>
					<td style='padding: 8px;'>- Provides the header component for the web application, facilitating user navigation and interaction<br>- It dynamically displays the logo, menu items, and user-specific actions based on session data<br>- The header integrates features such as search functionality, a shopping cart overview, and admin access for authorized users, enhancing the overall user experience within the e-commerce platform.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/pages/tempCodeRunnerFile.php'>tempCodeRunnerFile.php</a></b></td>
					<td style='padding: 8px;'>- Implements a search functionality that triggers navigation to a product listing page upon pressing the Enter key<br>- By capturing user input from a search field, it constructs a URL that includes the search query, enhancing user experience by facilitating quick access to relevant products within the overall project architecture<br>- This feature contributes to a more interactive and efficient browsing experience for users.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/pages/footer.php'>footer.php</a></b></td>
					<td style='padding: 8px;'>- Provides a structured footer for the website, enhancing user experience by displaying essential contact information for multiple locations, including addresses, hotlines, and email<br>- It also features a call-to-action button linking to the center system, promoting user engagement<br>- Additionally, the footer includes copyright information, reinforcing brand identity and ownership, thereby contributing to the overall layout and functionality of the web application.</td>
				</tr>
			</table>
			<!-- main Submodule -->
			<details>
				<summary><b>main</b></summary>
				<blockquote>
					<div class='directory-path' style='padding: 8px 0; color: #666;'>
						<code><b>⦿ pages.main</b></code>
					<table style='width: 100%; border-collapse: collapse;'>
					<thead>
						<tr style='background-color: #f8f9fa;'>
							<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
							<th style='text-align: left; padding: 8px;'>Summary</th>
						</tr>
					</thead>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/pages/main/products.php'>products.php</a></b></td>
							<td style='padding: 8px;'>Breadcrumb NavigationThe file dynamically generates breadcrumb links that guide users back to the home page and the products section, improving site usability.-<strong>Search and Filter ResultsIt accommodates search queries and filters based on product categories and brands, allowing users to refine their product exploration effectively.-</strong>User FeedbackThe notification section is designed to display messages or alerts, enhancing user interaction and engagement with the product listings.Overall, <code>products.php</code> is integral to the codebase architecture, facilitating a seamless and intuitive shopping experience for users by organizing product information and navigation in a user-friendly manner.</td>
						</tr>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/pages/main/listwish.php'>listwish.php</a></b></td>
							<td style='padding: 8px;'>- Facilitates the display and management of a users wishlist within the application<br>- It retrieves and presents favorite products, allowing users to view details such as product name and price<br>- Additionally, it enables users to remove items from their wishlist, ensuring a personalized shopping experience<br>- This functionality integrates seamlessly with the overall architecture, enhancing user engagement and satisfaction.</td>
						</tr>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/pages/main/product-detail.php'>product-detail.php</a></b></td>
							<td style='padding: 8px;'>- Product RetrievalIt fetches product details based on a unique identifier (ID) passed through the URL<br>- This includes attributes such as product name, description, pricing, ratings, and availability.-<strong>Inventory CheckIt includes a function to verify stock availability for specific product sizes, ensuring that users are informed about the current inventory status.-</strong>Data IntegrationThe file pulls in necessary data from multiple control and model files, ensuring that the product information is accurate and up-to-date.## UsageWhen a user navigates to a products detail page, this file dynamically generates the content based on the selected product, allowing users to view comprehensive information and make informed purchasing choices<br>- It plays a pivotal role in the overall architecture by linking the front-end presentation with back-end data management, thereby facilitating a seamless shopping experience.</td>
						</tr>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/pages/main/shell.php'>shell.php</a></b></td>
							<td style='padding: 8px;'>- Project Overview## Summary of <code>shell.php</code>The <code>shell.php</code> file serves as a crucial component of the project's user interface, specifically designed to manage and display the shopping cart functionality within the application<br>- It provides a structured layout that allows users to view their selected products, including details such as size, quantity, and price<br>- The breadcrumb navigation enhances user experience by allowing easy navigation back to the home page and the cart section.This file is part of a larger codebase that focuses on e-commerce solutions, ensuring that users can efficiently manage their shopping experience<br>- By presenting a clear and organized view of the cart contents, <code>shell.php</code> plays a vital role in facilitating user interactions and enhancing overall usability within the application.</td>
						</tr>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/pages/main/tiktokfeed.php'>tiktokfeed.php</a></b></td>
							<td style='padding: 8px;'>- Facilitates the display of a TikTok feed within the web application, enhancing user engagement through dynamic content integration<br>- The breadcrumb navigation improves user experience by providing clear pathways back to the home page and the TikTok section<br>- Overall, it contributes to the projects architecture by seamlessly incorporating third-party widgets while maintaining a structured layout.</td>
						</tr>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/pages/main/paysucess.php'>paysucess.php</a></b></td>
							<td style='padding: 8px;'>- Displays a success message for completed transactions, enhancing user experience by confirming payment completion<br>- It provides essential information about order tracking and encourages further shopping with a prominent call-to-action button<br>- The layout is visually appealing, featuring a responsive design that integrates an image to reinforce the success theme, contributing to the overall architecture of a user-friendly e-commerce platform.</td>
						</tr>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/pages/main/profile.php'>profile.php</a></b></td>
							<td style='padding: 8px;'>- Facilitates user profile management by ensuring only authenticated users can access their profile information<br>- It retrieves and displays user details such as name, ID, and avatar while providing navigation options for account settings and order history<br>- Additionally, it incorporates a popup feature for changing the users avatar, enhancing the overall user experience within the application.</td>
						</tr>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/pages/main/home.php'>home.php</a></b></td>
							<td style='padding: 8px;'>The prominent display of the brands identity and values, aimed at creating an emotional connection with potential customers.-**Call-to-ActionA strategically placed button that invites users to browse the product range, facilitating easy navigation and enhancing user engagement.Overall, <code>home.php</code> plays a crucial role in establishing the brands presence and driving user interaction, making it an essential part of the overall project structure.</td>
						</tr>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/pages/main/checkout.php'>checkout.php</a></b></td>
							<td style='padding: 8px;'>The page includes a navigation link that allows users to return to their shopping cart, enhancing the overall user experience by providing easy access to modify their selections.-<strong>Order SummaryIt presents an organized layout for displaying essential information, such as the shipping address, ensuring that users can confirm their details before proceeding.-</strong>Visual DesignThe integration of Material Design and Boxicons enhances the aesthetic appeal and usability of the checkout interface, making it visually engaging and intuitive.In summary, the <code>checkout.php</code> file is integral to the user journey in the e-commerce platform, streamlining the process of completing a purchase while ensuring clarity and ease of use.</td>
						</tr>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/pages/main/tempCodeRunnerFile.php'>tempCodeRunnerFile.php</a></b></td>
							<td style='padding: 8px;'>- Facilitates the checkout process by managing user cart data and calculating total costs<br>- It retrieves the users cart items, processes delivery options, and updates the displayed prices dynamically<br>- Additionally, it handles the final order submission through an AJAX request, ensuring a seamless transition to the payment success page<br>- This functionality is integral to enhancing the user experience within the e-commerce platform.</td>
						</tr>
						<tr style='border-bottom: 1px solid #eee;'>
							<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/pages/main/about.php'>about.php</a></b></td>
							<td style='padding: 8px;'>- Provides an engaging About section for the website, showcasing the brand's identity and product offerings<br>- It highlights the importance of quality footwear in daily life while presenting various categories such as tennis, gym, and basketball<br>- Additionally, it emphasizes customer trust through testimonials and key service features like fast shipping and hassle-free returns, enhancing the overall user experience within the project’s architecture.</td>
						</tr>
					</table>
					<!-- profile Submodule -->
					<details>
						<summary><b>profile</b></summary>
						<blockquote>
							<div class='directory-path' style='padding: 8px 0; color: #666;'>
								<code><b>⦿ pages.main.profile</b></code>
							<table style='width: 100%; border-collapse: collapse;'>
							<thead>
								<tr style='background-color: #f8f9fa;'>
									<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
									<th style='text-align: left; padding: 8px;'>Summary</th>
								</tr>
							</thead>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/pages/main/profile/donhang.php'>donhang.php</a></b></td>
									<td style='padding: 8px;'>- Facilitates the display and management of user orders within the profile section of the application<br>- It presents a structured table of orders, allowing users to view details, track statuses, and perform actions such as canceling orders<br>- A modal interface enhances user interaction by providing detailed order information dynamically, ensuring a seamless experience in managing their purchases.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/pages/main/profile/dangxuat.php'>dangxuat.php</a></b></td>
									<td style='padding: 8px;'>- Facilitates user logout functionality within the profile management section of the application<br>- By enabling users to securely exit their accounts, it enhances overall security and user experience<br>- This component plays a crucial role in maintaining session integrity and ensuring that user data remains protected, contributing to the broader architecture of user management and authentication within the project.</td>
								</tr>
								<tr style='border-bottom: 1px solid #eee;'>
									<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/pages/main/profile/taikhoan.php'>taikhoan.php</a></b></td>
									<td style='padding: 8px;'>- Profile management functionality enables users to view and update their personal information within the application<br>- It facilitates the editing of essential details such as name, date of birth, phone number, email, address, and password<br>- Additionally, it incorporates validation checks to ensure data integrity and provides feedback on successful updates, enhancing the overall user experience in managing their accounts effectively.</td>
								</tr>
							</table>
						</blockquote>
					</details>
				</blockquote>
			</details>
		</blockquote>
	</details>
	<!-- control Submodule -->
	<details>
		<summary><b>control</b></summary>
		<blockquote>
			<div class='directory-path' style='padding: 8px 0; color: #666;'>
				<code><b>⦿ control</b></code>
			<table style='width: 100%; border-collapse: collapse;'>
			<thead>
				<tr style='background-color: #f8f9fa;'>
					<th style='width: 30%; text-align: left; padding: 8px;'>File Name</th>
					<th style='text-align: left; padding: 8px;'>Summary</th>
				</tr>
			</thead>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/control/sanpham-act.php'>sanpham-act.php</a></b></td>
					<td style='padding: 8px;'>- Provides functionality for managing and displaying products within the application<br>- It retrieves product data from the database, including all products, new arrivals, and hot items, while also formatting currency for display<br>- Additionally, it supports updating sales quantities and generating HTML for product listings, enhancing the user experience by showcasing products dynamically based on their attributes and sales performance.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/control/hinhanh-act.php'>hinhanh-act.php</a></b></td>
					<td style='padding: 8px;'>- Facilitates the retrieval and display of image data associated with specific products within the web application<br>- By querying the database for images linked to a given product ID, it generates HTML output for rendering images in a list format and provides a simple string representation of image paths<br>- This functionality enhances the user experience by showcasing product visuals effectively.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/control/user-act.php'>user-act.php</a></b></td>
					<td style='padding: 8px;'>- User management functionality is provided through a set of functions that retrieve user information from a database<br>- These functions enable the retrieval of user details based on username or user ID, facilitating user authentication and profile management within the broader application architecture<br>- By connecting to the database and returning user objects, this component plays a crucial role in maintaining user data integrity and accessibility.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/control/xulylogin.php'>xulylogin.php</a></b></td>
					<td style='padding: 8px;'>- Handles user authentication by verifying login credentials against a database<br>- It checks for the existence of the username, validates the password, and ensures the account status is active<br>- Upon successful authentication, it initiates a user session, facilitating secure access to the application<br>- This functionality is crucial for maintaining user security and managing access within the overall project architecture.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/control/loaisp-act.php'>loaisp-act.php</a></b></td>
					<td style='padding: 8px;'>- Facilitates the retrieval and display of product categories within the web application<br>- It interacts with the database to fetch active product types, enabling dynamic generation of category lists for filtering and navigation<br>- This enhances user experience by providing organized access to product classifications, thereby streamlining the shopping process and improving overall site functionality.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/control/danhgia-act.php'>danhgia-act.php</a></b></td>
					<td style='padding: 8px;'>- Facilitates the management and display of product reviews within the application<br>- It retrieves, inserts, and checks for existing reviews, ensuring that user feedback is effectively captured and presented<br>- Additionally, it provides administrative functionalities to view and manage all reviews, enhancing the overall user experience by allowing potential customers to access valuable insights from previous buyers.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/control/ajax_action.php'>ajax_action.php</a></b></td>
					<td style='padding: 8px;'>- The file processes incoming AJAX requests to filter product data based on user-defined criteria, ensuring that users can easily find relevant products.-**Pagination ManagementIt manages pagination logic, allowing users to navigate through large sets of product data efficiently<br>- This includes determining the current page and calculating the starting point for data retrieval.## Integration with Project StructureThis file integrates with various components of the project, including product actions and database models, to ensure that the filtering and pagination functionalities are executed effectively<br>- By leveraging these components, <code>ajax_action.php</code> plays a vital role in maintaining the overall architecture of the application, ensuring that data is presented in a user-friendly manner while optimizing performance<br>- In summary, <code>ajax_action.php</code> is essential for delivering a responsive and interactive product browsing experience, aligning with the projects goal of providing a robust e-commerce platform.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/control/nhanhieu-act.php'>nhanhieu-act.php</a></b></td>
					<td style='padding: 8px;'>- Facilitates the management and display of brand information within the application<br>- It retrieves a list of active brands from the database, allowing for dynamic rendering in various contexts such as filters, navigation menus, and product details<br>- This enhances user experience by providing easy access to brand-related content throughout the platform, contributing to a cohesive and interactive interface.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/control/ctsizesp-act.php'>ctsizesp-act.php</a></b></td>
					<td style='padding: 8px;'>- Manages inventory levels for product sizes within the application<br>- It retrieves the current stock quantity based on product and size identifiers, updates stock levels when products are sold, and adjusts quantities when orders are canceled<br>- This functionality is essential for maintaining accurate inventory records and ensuring that stock availability reflects real-time transactions, thereby supporting overall operational efficiency in the project.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/control/changeAvt.php'>changeAvt.php</a></b></td>
					<td style='padding: 8px;'>- Facilitates the updating of user profile avatars by handling file uploads and database interactions<br>- Upon receiving a request, it processes the uploaded image, saves it to designated directories, and updates the users avatar path in the database<br>- This functionality enhances user experience by allowing personalized profile management within the broader application architecture.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/control/px-act.php'>px-act.php</a></b></td>
					<td style='padding: 8px;'>- Manages the creation, retrieval, and cancellation of sales invoices within the application<br>- It facilitates the insertion of new invoices, updates their status, and retrieves invoice details based on customer identification<br>- Additionally, it provides functionality to list completed invoices, ensuring efficient tracking and management of sales transactions, thereby enhancing the overall operational workflow of the system.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/control/ctpx-act.php'>ctpx-act.php</a></b></td>
					<td style='padding: 8px;'>- Facilitates the management of export invoice details within the application by providing functions to insert, delete, and display itemized information related to export invoices<br>- It retrieves product details, calculates totals, and formats output for user-friendly presentation, ensuring seamless integration with the database and enhancing the overall functionality of the invoicing system in the project architecture.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/control/ajax_register.php'>ajax_register.php</a></b></td>
					<td style='padding: 8px;'>- Handles user registration by validating input data such as username, full name, phone number, email, and password<br>- It ensures all required fields are filled and checks for existing usernames and valid formats<br>- Upon successful validation, it registers the user, integrating with the broader account management system<br>- This functionality is essential for maintaining user integrity and security within the application.</td>
				</tr>
				<tr style='border-bottom: 1px solid #eee;'>
					<td style='padding: 8px;'><b><a href='https://github.com/HoDoHoangKhang/WebShoes/blob/master/control/taikhoan-act.php'>taikhoan-act.php</a></b></td>
					<td style='padding: 8px;'>- Provides essential functionality for user account management within the application<br>- It facilitates user registration, validates input data such as usernames and passwords, and retrieves user information and permissions from the database<br>- This module ensures that user data is correctly processed and stored, contributing to the overall architecture by enabling secure and efficient user interactions within the system.</td>
				</tr>
			</table>
		</blockquote>
	</details>
</details>

---

## 🚀 Getting Started

### 📋 Prerequisites

This project requires the following dependencies:

- **Programming Language:** PHP
- **Package Manager:** Composer

### ⚙️ Installation

Build WebShoes from the source and intsall dependencies:

1. **Clone the repository:**

    ```sh
    ❯ git clone https://github.com/HoDoHoangKhang/WebShoes
    ```

2. **Navigate to the project directory:**

    ```sh
    ❯ cd WebShoes
    ```

3. **Install the dependencies:**

**Using [composer](https://www.php.net/):**

```sh
❯ composer install
```

### 💻 Usage

Run the project with:

**Using [composer](https://www.php.net/):**

```sh
php {entrypoint}
```

### 🧪 Testing

Webshoes uses the {__test_framework__} test framework. Run the test suite with:

**Using [composer](https://www.php.net/):**

```sh
vendor/bin/phpunit
```

---

## 🤝 Contributing

- **💬 [Join the Discussions](https://github.com/HoDoHoangKhang/WebShoes/discussions)**: Share your insights, provide feedback, or ask questions.
- **🐛 [Report Issues](https://github.com/HoDoHoangKhang/WebShoes/issues)**: Submit bugs found or log feature requests for the `WebShoes` project.
- **💡 [Submit Pull Requests](https://github.com/HoDoHoangKhang/WebShoes/blob/main/CONTRIBUTING.md)**: Review open PRs, and submit your own PRs.

<details closed>
<summary>Contributing Guidelines</summary>

1. **Fork the Repository**: Start by forking the project repository to your github account.
2. **Clone Locally**: Clone the forked repository to your local machine using a git client.
   ```sh
   git clone https://github.com/HoDoHoangKhang/WebShoes
   ```
3. **Create a New Branch**: Always work on a new branch, giving it a descriptive name.
   ```sh
   git checkout -b new-feature-x
   ```
4. **Make Your Changes**: Develop and test your changes locally.
5. **Commit Your Changes**: Commit with a clear message describing your updates.
   ```sh
   git commit -m 'Implemented new feature x.'
   ```
6. **Push to github**: Push the changes to your forked repository.
   ```sh
   git push origin new-feature-x
   ```
7. **Submit a Pull Request**: Create a PR against the original project repository. Clearly describe the changes and their motivations.
8. **Review**: Once your PR is reviewed and approved, it will be merged into the main branch. Congratulations on your contribution!
</details>

<details closed>
<summary>Contributor Graph</summary>
<br>
<p align="left">
   <a href="https://github.com{/HoDoHoangKhang/WebShoes/}graphs/contributors">
      <img src="https://contrib.rocks/image?repo=HoDoHoangKhang/WebShoes">
   </a>
</p>
</details>

---

## 📜 License

Webshoes is protected under the [LICENSE](https://choosealicense.com/licenses) License. For more details, refer to the [LICENSE](https://choosealicense.com/licenses/) file.

---

## ✨ Acknowledgments

- Credit `contributors`, `inspiration`, `references`, etc.

<div align="left"><a href="#top">⬆ Return</a></div>

---
