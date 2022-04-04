 # HTML Requirement

<details> 
 <summary><h2>  1. Introductory home page (index.html) </h2></summary>

This page should contain: 
*  An appropriate title.  
*  A background graphic (use CSS to do this).   
*  A menu that links to the other pages on your Web site. This menu should appear on every page of your website. 
*  A header containing appropriate content. This header should appear on every page of your website. 
*  A footer that includes an email hyperlink to your student email address. This footer should appear on every page of your website.</p>
</details>
<details>
 <summary><h2> 2.  Topic Description page(s) (topic.html) </h2> </summary>

<p>You should write at least 150 words on your allocated topic and the content should be appropriately marked-up with headings, paragraphs, sections, subsections etc. 

The page must contain: 
* Hierarchically structured headings of at least 2 levels. (e.g. make sure your H2 is below an H1)   
* More than one `<section>` 
* An `<aside>` with appropriate content, i.e.  a section of a page that consists of content that is tangentially related to the content 
* At least one appropriate <img> related to your topic. This image should be less 100k. The 
image should be in a `<figure>` element with <caption>  
* A table containing some data related to your topic. 
* At least one ordered list 
* At least one definition list 
Your content should briefly and concisely explain such as: 
* What is the technology?  Its purpose / function? Major points / features ? 
* Who developed it? When? Why?  
* What groups, if any, are responsible for managing it? 
* Explain its growth or decline. Predict the future for the technology. 
* What are related technologies? Compare / contrast with other technologies.    
 
If you decide to have more than one topic page call them topic1.html, topic2.html, etc.. 
 
***Note: You are not expected to create the “definitive reference” on your topic, but your information should be accurate. Incorrect information will reduce your mark.***  
 
### Sources / References:   
* Good resources for starting your research include Wikipedia, Google and online databases in the library. (You should use at least 3 sources of information. Do not just use Wikipedia.) 
* Use primary sources for information, but then write the content in your own words.  
* Please do NOT copy your text from other websites. You can quote / cite key text from another site, and there are appropriate ways to do this, eg. mark-up using a blockquote, inline quote, citation.   
 * Keep track of all your sources/references and cite them as footnotes.</p>  
 </details>
<details>
 <summary><h2>  3.  Quiz page (quiz.html) </h2></summary>

<p>This page consists of a form where the user can enter: 
* their first name  
* their last name 
* student number  
* their responses to at least 5 questions related to your topic. 
 
The questions should be use five different input types:  
a. a text input question  
b. a multiple choice question with one correct answer (radio button group)  
c. a multiple choice question with multiple correct answers (check box group)  
d. a drop list with a single correct answer.  
e. an input type of your choice other than the above (e.g. number, range, text area, image, map, etc.)  
 
Fieldsets and legends should be used appropriately to group inputs into questions. 
 
Labels and inputs should be linked with a for attribute.  
 
Before quiz answers are submitted, HTML5 data validation should be used to check the following: 
* Text and radio input questions must be answered  
* Name and student id fields are not empty. 
* The first and last name data should be checked to ensure it only consists of alpha characters, hyphens or spaces. A maximum of 30 characters should be able to be entered. 
* The student number is either 7 or 10 digits.   
 
 
### Data Submission of Quiz answer to the Server 
 
For this assignment all forms should have a Submit input. When the submit button is clicked the name-values from the associated form should be sent to the server using the post http method. The server action address is https://mercury.swin.edu.au/it000000/formtest.php. The server will then just echo back the name value pairs to the client. While nothing will be stored on the server in this part of the assignment (we will do this in Part 2) this will allow the form to be tested.</p>    
 </details>
 <details>
 <summary><h1> Enhancements </h1>
 <p><em> Note: Make sure you get all the basics working first before you attempt any enhancements.</em></p> </summary>  
  
 
<p>The technologies for developing Web applications are rapidly changing. One of the key skills you will need is finding out about these techniques (from the Web) and applying them.  This assessment gives you an opportunity to demonstrate your ability to implement features/techniques that go beyond the specified requirements above. This is an opportunity to demonstrate your ability to discover techniques from a range of sources and apply them in a standards compliant manner.  
 
These enhancements need to be implemented within the Web pages (index.html, topic.html, quiz.html). The extra features need to enhance your website in a relevant way.  
On a separate Web page called enhancements.html  list and describe each enhancement you have made and how you have significantly extended the basic HTML and CSS beyond what is covered in the Lectures/Tutorials. Hyperlink from this list to where the feature is implemented in your website. If it is a CSS feature, hyperlink to an example of the html that is selected by the CSS rule. For each enhancement feature briefly explain:  
 
☑ how it goes beyond the basic requirements of the assignment  
☑ what code is needed to implement the feature    
☑ if you have sourced your technique from a third party the source of this technique (e.g. URL) must be cited.   
☑ a hyperlink to where you have applied that extension in your website (this is needed so the marker can quickly assess your enhancements).  
☑ All enhancements must be able to run on the version of Firefox in the labs. Make sure you check this. 
 
A maximum of 2 enhancements will be assessed. Here are some examples of HTML/CSS enhancements: 

* Effective, appropriate  and innovative use of a  number of distinct  HTML elements not  covered in lectures/tutorials (e.g. Image maps) used in a way that improves the user experience of the website. 
* A number of  additional CSS properties or selectors (e.g. support for interactivity) not covered in  the  lectures/tutorials.  For  example  the  use  of  a  range  CSS3  pseudo-elements  and  classes, child or siblings combinators, attribute selectors, etc. (e.g. use the CSS3 :target selector to help us see where you have applied your enhancements.)  
* Implement  Responsive  Design  with  additional  CSS  that  presents  your  website  specifically  for mobile phone / tablet sized displays. 
* In  addition to your standard CSS, create another CSS files that re-implements and extends the style with a library/preprocessor such a Bootstrap, LESS or Sass. Demonstrate and document a number of cool features that can be implemented using the library.  
   
Discuss your proposed enhancements with your facilitator before you implement them. The number of marks you receive for an enhancement will be at the sole discretionof your marker. As a guide if the enhancement has only taken a couple of lines of code it is likely to be trivial. 

* Be relevant to / enhance the content of the website 
* Be well described (as explained above) 
* Be non-trivial.  
* Be significantly different from other features you have implemented. </p> 
 </details> 
