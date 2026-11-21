\# Team Portfolio Website



\## 1. Project Overview



The Team Portfolio Website is a single-page website developed using WordPress. It presents the members, skills, projects, and background of our development team.



The website allows visitors to explore the team's information through different sections using a navigation menu. It was developed locally using XAMPP, WordPress, a WordPress theme, plugins, and custom HTML and CSS.



\## 2. Project Objectives



\- To introduce the members of the development team.

\- To showcase the team's skills and technologies.

\- To present the team's projects.

\- To develop an organized and user-friendly portfolio website.

\- To demonstrate the integration of WordPress, themes, and plugins.

\- To verify that the website components work correctly within the WordPress environment.



\## 3. Technologies Used



| Technology | Purpose |

|---|---|

| WordPress | Main content management system |

| HTML | Website structure |

| CSS | Website styling and layout |

| PHP | Server-side technology used by WordPress |

| MySQL | Database management |

| XAMPP | Local development environment |

| Elementor | Homepage editing and HTML widget |

| Astra | Active WordPress theme |

| Spectra | Additional WordPress block-building features |

| SureForms | Form creation and management |

| SureCookie | Cookie consent management |



\## 4. Website Structure



The website uses a single-page scrolling layout with the following sections:



1\. \*\*Home\*\* – Introduces the team through the main heading and welcome section.

2\. \*\*Members\*\* – Displays the team members, photographs, and assigned roles.

3\. \*\*Projects\*\* – Showcases the team's projects and descriptions.

4\. \*\*Skills \& Technologies\*\* – Presents the tools and technologies used by the team.

5\. \*\*About Us\*\* – Provides information about the team.

6\. \*\*Footer\*\* – Displays the closing section of the website.



The navigation menu uses HTML anchor links to move visitors to the corresponding sections of the homepage.



\## 5. Development Environment



The website was developed locally using XAMPP.



\*\*Development Details:\*\*



\- Operating System: Windows 11

\- Local Server: XAMPP

\- Web Server: Apache

\- Database Server: MySQL

\- Database Name: `cc\_portfolio\_db`

\- Database Host: `localhost`

\- WordPress Installation Folder: `C:\\xampp\\htdocs\\wordpress`

\- Website URL: `http://localhost/wordpress/`

\- WordPress Dashboard: `http://localhost/wordpress/wp-admin/`



The Home page is configured as the static homepage through WordPress Settings → Reading.



\## 6. WordPress Theme and Plugin Integration



\### WordPress



WordPress serves as the main content management system. It manages the website's pages, media files, theme, plugins, and database connection.



\### Astra Theme



Astra is the active WordPress theme. It provides the theme foundation for the website and works with WordPress to display the homepage.



\### Elementor



Elementor is used to edit the homepage. The portfolio layout is placed inside an HTML widget, while custom HTML and CSS control the structure and appearance of the portfolio sections.



\### Spectra



Spectra provides additional block-building features for WordPress. Its dashboard is accessible through the WordPress administration area.



\### SureForms



SureForms is installed and activated to provide form-building functionality. However, no form has been created yet, so form creation and submission have not been tested.



\### SureCookie



SureCookie provides cookie consent management. Its consent banner was observed when the website was opened in an Incognito browser window.



\## 7. Runtime Verification



The following tests were performed to verify the relationship between WordPress, the active theme, plugins, database, and website components.



| Component | Verification Performed | Result |

|---|---|---|

| WordPress Dashboard | Dashboard opens successfully | Passed |

| Database Connection | Dashboard loads while Apache and MySQL are running | Passed |

| Static Homepage | Home is selected as the static homepage | Passed |

| Astra Theme | Astra is installed and active | Passed |

| Elementor | Editor opens and portfolio HTML widget is visible | Passed |

| Spectra | Plugin dashboard opens successfully | Passed |

| SureForms | Plugin is active, but no form has been created | Partially Verified |

| SureCookie | Cookie consent banner appears in Incognito mode | Passed |

| Media Library | Uploaded member and project images are visible | Passed |

| Portfolio Sections | All sections and images display correctly | Passed |

| Navigation Links | All five navigation links move to their correct sections | Passed |

| Server Restart | Website loads successfully after restarting Apache and MySQL | Passed |



\### Runtime Verification Summary



The WordPress dashboard and frontend were tested successfully. The homepage displays the portfolio sections, uploaded images, and navigation links. The active theme and plugins were also checked.



The website successfully loaded after restarting Apache and MySQL, confirming that the local WordPress installation remained accessible.



SureForms is active, but its form functionality remains untested because no form has been created.



\## 8. Installation and Setup Guide



To run the website locally:



1\. Install XAMPP on the computer.

2\. Start Apache and MySQL using the XAMPP Control Panel.

3\. Place the WordPress project folder inside the XAMPP `htdocs` directory.

4\. Create or import the required WordPress database.

5\. Configure the WordPress database connection.

6\. Open `http://localhost/wordpress/` in a web browser.

7\. Access the WordPress Dashboard through `http://localhost/wordpress/wp-admin/`.

8\. Make sure the Astra theme and required plugins are installed and activated.

9\. Set the Home page as the static homepage under Settings → Reading.



\*\*Important:\*\* The database and WordPress files must also be backed up or transferred when moving the website to another computer. This README does not contain the actual website backup.



\## 9. Current Limitations



\- SureForms does not have a created form yet.

\- SureForms form creation and submission have not been tested.

\- The website currently runs on a local WordPress installation and is not publicly hosted.

\- Project images and descriptions should be updated whenever the team's project information changes.



\## 10. Conclusion



The Team Portfolio Website demonstrates the use of WordPress, themes, plugins, and custom HTML and CSS in developing a team portfolio.



The runtime verification process confirms that the main website components work together within the local WordPress environment. The project also documents the configuration and testing results to make the website easier to understand and maintain.

