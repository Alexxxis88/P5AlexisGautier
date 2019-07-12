<?php
class FormController
{
    public function sendMessage($firstName, $lastName, $contactEmail, $topic, $messageContent)
    {
        $to  = 'alexisxgautier@gmail.com, '. htmlspecialchars($contactEmail) . '';
        $message = '
        <html>
            <body>
                <p>' .  htmlspecialchars($messageContent) . '</p>
            </body>
        </html>
        ';
        // Headers Content-type must be defined to send an HTML email
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';

        // Additional headers
        $headers[] = 'To: Alexis <alexisxgautier@gmail.com>, <'. htmlspecialchars($contactEmail) . '>';
        $headers[] = 'From: ' . htmlspecialchars($firstName) . ' '. htmlspecialchars($lastName) . '<'. htmlspecialchars($contactEmail) . '>';
        mail($to, $topic, $message, implode("\r\n", $headers));

        header('Location: index.php');
    }


    public function saveMessage($firstName, $lastName, $contactEmail, $topic, $messageContent)
    {
        $messageManager = new MessageManager();
        $messageManager->insertNewMessage(htmlspecialchars($firstName), htmlspecialchars($lastName), htmlspecialchars($contactEmail), htmlspecialchars($topic), htmlspecialchars($messageContent));
    }



}
