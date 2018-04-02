# assignment4

## Team information

city-team name: Medellin

Qianyi Li - Information Architect

Forest Shi - Design Artist

Zubair - Coder

Website Location:

GitHub Location: <https://github.com/qli31/assignment4>

Database Location:

## The Information Architecture Section

### Ontology, Choregraphy and Taxonomy

The website will cover 4 students. The focus of the webpage will be the work experience and course work for each of the students. All 4 students are currently study in University of Rochester. Among four students, the first three students are sophmore \and fourth student are junior.

The website shows the difference between sophmore and senior. Compare to sophmore, the senior student has more work experience and more course work. Workload related pictures should be next to the course work sections to help the readers related to ligher course work for sophmore and heavier course work for senior. The first three students will have similar picture about light course work and the forth student will have a picture indicate heavy course work. The work experience part will be presented in list rather than a paragraph. With a obvious longer list on the forth students, the readers can easily sense that the senior have more work experience.

### Layout Suggestion

For introduction page: The page will have a short introduction for four students and point out the difference between the first three and the forth clearly. This paragraph will have larger font and good padding, so that it easily catch the reader's sight and help the reader to get the main focus of the website. After the introduction section, there are short paragraphs for each students. The first three students will have the same background color and font and border. The forth one will have different kind of background color, font and border. The JS slider should have the pictures of all four students. If the coder is capable of adding a frame for the pictures in the slider, it is recommended for the designer to have contrast frame color for the forth student. It is recommended to high light or use contrast color for the words "sophmore" and "senior" to help the user better understand the different we are focuing here.

For individual page: The work experience, coursework and the picture for coursework will be on the left side and take around 70% of the space. The picture for the individual will be on the right side. The pictures should be in the same size and in scale. The heading and the navigation bar should be in the center and have the same width as the body part. The about me, coursework and work experience are headers as that is the ontogoly for this website.

In general, all the page should have nevigation bars. The coder should make sure the navigation bar work properly. It is recommended for the designer to have a contrast color for the forth student in the nevigation bar. The nevigation bar should have links to all the pages except the thank you page(post_survey.php). All the pages should have idencial footer and similar design(but show contrast in the forth student webpage).

### Suggestion for Fonts

Details for fonts are mentioned above, in general the first students will have the same kind of fonts and the forth will have different kind of fonts. The fonts can be causual but not too funny. To better show the contradiction between the first three and the forth. On the introduction page, it is better the high light the keyword, like "prefer outdoor activities" or "have a lot of coursework".

### Web Form Basic Info and Attributes

The web form should gather the users information about their coursework and work experience during their sophmore year or senior year, which are sharing the same focus of the website. This is how this form is linked to the website. If the team decide to further expand this website, the team can put up the information they gathered from the form and use it to build more webpage.

first name

purpose: asking user for firstname input

input type: text

label: firstname

id :firstname

name: firstname

lastname

purpose: asking user for lastname input

input type: text

label: lastname

id :lastname

name: firstname

class year

purpose: asking for user's class year input

input type: radio

label: sophmore / senior

id :sophmore / senior

name: year

coursework

purpose: asking for user's coursework

input type: textarea

label: coursework

id :coursework

name: coursework

work experience

purpose: asking for user's work experience

input type: textarea

label: work experience

id :coursework

name: work experience

submit

input type:submit

### Web Form Layout

The web form page (pre_survey.php) have similar header, footer and general design with other pages. The questions in the form will follow the sequence of firstname, lastname, classyear, coursework, workexperience and submit. The user click submit after they complete the form. The page automatically goes to the thank you page (post_survey.php). The thank you page have similar header, footer and general design with other pages and thanks the user for filling out the form. The user can go to any page in the website by clicking the bottom in the navigation bar.

## The Design Artist Section

### Color Selection

I chose to use these two colors for making the website, because the students are UoR students, and theses colors the official blue and yellow of UoR.
Rochester Blue #315585
Rochester Yellow #fad100

### CONTRAST

Color - On the index page, the words sophomore is highlighted in blue and senior is in yellow to distinguish between the two. In addition, all the images of the sophomores are framed with a blue frame, while the senior is framed with a yellow frame. Furthmore, the senior's page has a yellow theme overall with yellow header and navbar, while all of te sophomore pages are blue themed. This adds to the contrast that the senior is different from the rest of the students.

Font - Moreover, the senior's page is designed to highlight the work experience of the senior as compared to the others. The font used on the senior's page and index page is different from the others. The font on other pages is Roboto and looks very simple and casual and this symbolizes the casual nature of sophomore life and their lesser workload. However the senior's page uses the font IBM plex serif, and this font looks more professional, similar to the fonts used on resumes or offical documents and this symbolizes the heavier workload, more professional and serious nature of the senior's experience.

Design Elements - The senior's page also has a line separating the photo section and the text section, which the other pages do not have. This makes the page look visually more structured and professional, to add to the sense or mood that the senior has more work experience and is more mature professionally.

### REPITITION

Every page has the same structure, About Me, Work Experience, and then coursework. Additionally, every page has the same page footer at the bottom in blue and gold with the website team name. Furthermore, each page has the image placed on the rigth and the text on the left. These similar elements tie the individual pages together and make them look like they are part of the same website, and not separate on their own.

### ALIGNMENT

The photos are aligned at the top with the h2 titles. Each h2 title and paragraph are also aligned to make the page look more tidy and structured. All of the content is aligned center and have white space on the borders to increase page readability and look more aesthetically pleasing.

### PROXIMITY

I added extra margin and padding between each section of text to make the titles of each section closer to its own paragraph then to the next paragraph. This makes it clear which parts have a relationship with each other and increases readability.

### Font Choices

I used Lato for the titles because it is big, clear, and easily readable. I used Roboto for the text of all the sophomores. This text is clean and simple and goes well with the Lato font. It also creates a sense of casualness and easily going as is the theme of the sophomores. The senior page, however, uses the font IMB Plex Serif which looks more serious and professional, and adds to the theme that the senior has a heavier workload and is more professional and has more work experience.

### Layout

I used flex for the layout of the page. Flex is easy to use and places each element in columns that make the site look very clean and ordered. I did not have to use float to make the images align with the text, flex just automatically did it for me. I created a container class and place all of the content into that container. The container uses flex to structure elements within. I also have another container containing that container plus the navbar and header, and that uses flex-direction: column to order the navbar and header and the content.

### Additional Structural Elements

On the index page, I placed a line separator between each student to make the page look more clean and structured and increase readability. It also serves to separate the index page from the other individual pages visually at a glance.

## The Technical Coder Section

### MySQL Database

#### Survey for Site Visitors

Survey catches data such as first name, last name, school year, course work, and work experience.

Data is processed through "form-handler.php" and sent to the database through a mysqli connection.

This data is also displayed in the Survey page. Up to 3 past responses will be picked to be shown on the survey page.

### HTML and CSS Validation

Ensured that the entire website meets web standards and follows best practices.
