# Assignment-1

  1. Introductory home page (index.html)

This page should contain: 
•  An appropriate title.  
•  A background graphic (use CSS to do this).   
•  A menu that links to the other pages on your Web site. This menu should appear on every 
page of your website. 
•  A header containing appropriate content.  This header should appear on every page of your 
website. 
•  A footer that includes an email hyperlink to your student email address.  This footer should 
appear on every page of your website.

  2.  Topic Description page(s) (topic.html)

You should write at least 150 words on your allocated topic and the content should be appropriately 
marked-up with headings, paragraphs, sections, subsections etc. 
The page must contain: 
• Hierarchically structured headings of at least 2 levels. (e.g. make sure your H2 is below an 
H1)   
• More than one <section> 
• An <aside> with appropriate content, i.e.  a section of a page that consists of content that 
is tangentially related to the content 
• At least one appropriate <img> related to your topic. This image should be less 100k. The 
image should be in a <figure> element with <caption>  
• A table containing some data related to your topic. 
• At least one ordered list 
• At least one definition list 
Your content should briefly and concisely explain such as: 
• What is the technology?  Its purpose / function? Major points / features ? 
• Who developed it? When? Why?  
• What groups, if any, are responsible for managing it? 
• Explain its growth or decline. Predict the future for the technology. 
• What are related technologies? Compare / contrast with other technologies.    
 
If you decide to have more than one topic page call them topic1.html, topic2.html, etc.. 
 
Note: You are not expected to create the “definitive reference” on your topic, but your information 
should be accurate. Incorrect information will reduce your mark.  
 
Sources / References: 
• Good resources for starting your research include Wikipedia, Google and online databases in 
the library.  (You should use at least 3 sources of information. Do not just use Wikipedia.) 
• Use primary sources for information, but then write the content in your own words.  
• Please do NOT copy your text from other websites. You can quote / cite key text from another 
site, and there are appropriate ways to do this, eg. mark-up using a blockquote, inline quote, 
citation.   
• Keep track of all your sources/references and cite them as footnotes.
  
  3.  Quiz page (quiz.html) 
  
This page consists of a form where the user can enter: 
• their first name  
• their last name 
• student number  
• their responses to at least 5 questions related to your topic. 
 
The questions should be use five different input types: 
a. a text input question 
b. a multiple choice question with one correct answer (radio button group) 
c. a multiple choice question with multiple correct answers (check box group) 
d. a drop list with a single correct answer. 
e. an input type of your choice other than the above (e.g. number, range, text area, image 
map, etc.) 
 
Fieldsets and legends should be used appropriately to group inputs into questions. 
 
Labels and inputs should be linked with a for attribute.  
 
Before quiz answers are submitted, HTML5 data validation should be used to check the following: 
• Text and radio input questions must be answered  
• Name and student id fields are not empty. 
• The first and last name data should be checked to ensure it only consists of alpha 
characters, hyphens or spaces. A maximum of 30 characters should be able to be entered. 
• The student number is either 7 or 10 digits.   
 
 
Data Submission of Quiz answer to the Server 
 
For this assignment all forms should have a Submit input. When the submit button is clicked the 
name-values from the associated form should be sent to the server using the post http method. The 
server action address is https://mercury.swin.edu.au/it000000/formtest.php. The server will then 
just echo back the name value pairs to the client. While nothing will be stored on the server in this 
part of the assignment (we will do this in Part 2) this will allow the form to be tested.  
