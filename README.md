# Open-Data-for-Schools
Open science and as part of it, open data has the potential to bring transparency and scientific innovation. With the availability of openly accessible datasets, students could have the opportunity to work with real datasets e.g., about their city or neighborhood, and understand different facts and real-life problems at a local level.To facilitate teachers and students we developed an open data interface using open source tools that provide direct access to educational datasets categorized under the following educational domains: science, math, and geography.
# Get Started
Download the source code (master branch) in XAMPP htdocs under the new folder "project". You can download XAMPP from https://www.apachefriends.org/download.html. Start running the Apache and MySql on XAMMP. Use the follwing login details for wordpress login:

User name: odwschool@gmail.com

Password: Odws_school2021.

Upload the database file database.sql on localhost/phpmyadmin. Run the SQL query stated in file Sql_query.docx. Open the config file, and check the follwoing:

/** MySQL database username */ define( 'DB_USER', 'root' );

/** MySQL database password */ define( 'DB_PASSWORD', '');

/** MySQL hostname */ define( 'DB_HOST', 'localhost' );

define( 'WP_HOME', 'http://localhost/project');

define( 'WP_SITEURL', 'http://localhost/project');

If you have a different folder name then use it instead of the project. Write the site URL http://localhost/project in your browser, you have your open data interface for schools.

# Visualization
We use Tableau https://www.tableau.com/ for visualizing educational open data sets and you need a login credential to see visualization available on this interface. You can use any other visualization tool and just embedded the visualization code in the respective website pages.
