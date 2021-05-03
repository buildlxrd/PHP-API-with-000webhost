# How to Make a PHP API with 000webhost

APIs help programs communicate with one another. They can be used in making
- mobile apps
- Facebook Messenger chatbots
- games
- and many more

Let's build one!

## How to Make a Free PHP API with 000webhost

### What you Need to Start
-- Internet Connection
-- A GMail or Outlook Email

### Steps
1. Register for a 000webhost Account [here](https://ph.000webhost.com/free-website-sign-up).
-- Go to 000webhost.com and then scroll down.
-- Click the "FREE SIGN UP" button.
-- Create your account credentials.
-- Click the "SIGN UP" button.
-- Verify your email.
2. Create the Website
-- After verifying your email, you will be redirected to a webpage. Click the "GET STARTED" button.
-- When asked, "What would you like to do?" select, "Other".
-- Enter the name of your website and then click the "SUBMIT" button.
-- When asked about how you want to create your website, select the "Upload your site" option.
-- Create a file named "index.php" under the "public_html" file.
-- Double click the file you created and then paste the code from [https://github.com/m8eee/PHP-API-with-000webhost/blob/main/index.php](https://github.com/m8eee/PHP-API-with-000webhost/blob/main/index.php) there.
3. Opening the API
-- Go to your website list.
-- Open the link under the "Upgrade" button.

## How to Make a Facebook Messenger Chatbot

### What you Need to Start
-- Internet Connection
-- A GMail or Outlook Email
-- A Facebook Profile

The following steps assume that you already have a 000webhost account.
### Steps

1. Make a Facebook Page
2. Create an API Endpoint for the Chatbot
-- Log into your 000webhost account.
-- Hover your cursor over the website.
-- Click "Manage Website".
-- Click "Tools".
-- Click "File Manager".
-- Click "Upload Files".
-- Open the "public_html" folder.
-- Create a new file called "index.php".
-- Paste the code from [https://github.com/m8eee/PHP-API-with-000webhost/blob/main/api.php](https://github.com/m8eee/PHP-API-with-000webhost/blob/main/api.php) into the file.
-- Go back to the file manager and click the "View Site" button.
-- Add "/index.php" to the end of the link to access the website.
3. Make the Facebook Application
-- Create a developer account in https://developers.facebook.com/.
-- Log into the said account.
-- Click "My Apps".
-- Click "Create App".
-- Click "More Options" and then "Continue".
-- Click "Something Else" and then "Continue".
-- Write an appropriate name in the first text box and then click "Continue".
-- Once the app loads, scroll down and look for a box that has the word "Messenger" in it and click the "Set Up" button that is in the same box.
-- Scroll down again. Look for the "Add or Remove Pages" button and click it.
-- After you do that, a small tab will be shown on your screen. Press the "Continue button". Then, click on the Facebook Page you created. Once you do that, click "Next" and then "Done".
-- Once you added your Facebook page, click "Generate Token". On the screen that shows up, tick the "I Understand" box and copy the token. Then, click "Done".
4. Connect Your Facebook Application to the API
-- Log into your 000webhost account.
-- Hover your cursor over the website.
-- Click "Manage Website".
-- Click "Tools".
-- Click "File Manager".
-- Click "Upload Files".
-- Open the "public_html" folder.
-- Double click on the "index.php" file.
-- Replace "YOUR_BOT_TOKEN_HERE" with the token that you copied in step 3.
-- Go to the application you made in https://developers.facebook.com/ and click "Add Callback URL" in the Messenger product.
-- Doing that will show a screen that asks for a callback URL and a verify token. For the callback URL, put in the website you made but add "/index.php" at the end.
-- For the verify token, write "YOUR_VERIFY_TOKEN".
-- After adding a callback URL, click "Add Subscriptions". Tick the box that has the "Messages" label. Finally, click "Save".
-- Send a message to the Facebook page you made in Step 1. You should get a message that says, "Hello, customer! May I take your order?"