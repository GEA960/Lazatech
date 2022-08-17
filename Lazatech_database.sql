-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 17, 2022 at 08:47 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17986245_onaid_database`
--
CREATE DATABASE IF NOT EXISTS `id17986245_onaid_database` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id17986245_onaid_database`;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_img` varchar(1000) NOT NULL DEFAULT 'default.png',
  `blog_by` int(11) NOT NULL,
  `blog_date` date DEFAULT NULL,
  `blog_votes` int(11) NOT NULL DEFAULT 0,
  `blog_content` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_title`, `blog_img`, `blog_by`, `blog_date`, `blog_votes`, `blog_content`) VALUES
(2, 'Visual Studio Code â€“ Best Programming Editor', '618a1807dcfcd6.01647273.png', 40, '2021-11-09', 0, 'source: https://code.visualstudio.com/\r\n<br> <br>\r\nVisual Studio Code is a lightweight but powerful source code editor which runs on your desktop and is available for Windows, macOS and Linux. It comes with built-in support for JavaScript, TypeScript and Node.js and has a rich ecosystem of extensions for other languages (such as C++, C#, Java, Python, PHP, Go) and runtimes (such as .NET and Unity). Begin your journey with VS Code with these introductory videos (Getting Started - Visual Studio Code, n.d.).  <br>  <br>\r\nInstallation Steps: <br> \r\n 	The installation process for computers running macOS, Windows, and Linux, (specifically Ubuntu and Debian), will be very similar and using Visual Studio Code across all of them will be the same (CodeAcademy, n.d.). <br> \r\n\r\n1.	Visit the Visual Studio Code website to download the latest version of Visual Studio Code. Paste this link on your URL to download VS code: https://code.visualstudio.com/ <br> <br>\r\n2.	You should see your computerâ€™s operating system displayed, but if itâ€™s not correct, click on the down arrow and find the option that matches your operating system from the drop down menu and click on the down arrow icon under â€œStable.â€ <br> \r\nWindows users: This will download the latest version of Visual Studio Code as an .exe \r\n 	file. <br> \r\nMac users: This will download the latest version of Visual Studio Code for Mac as a .zip   \r\n 	file. <br> \r\nLinux users: .deb and .rpm are different file types for storing data. We suggest you download the .deb file so auto-updates work as the Visual Studio Code documentation suggests. <br> <br>\r\n3.	Once the Visual Studio Code file is finished downloading, we need to install it. Find the Visual Studio Code file in your file manager, the program that lets you see the files and folders on your computer. <br> \r\nWindows users: Open the .exe file by clicking on it and on run the installer. Keep   \r\n 	clicking â€˜Nextâ€™ and then finally â€˜Finish.â€™ <br> \r\n 	Mac users: The downloaded .zip file should be in your â€˜Downloadsâ€™ folder. Open the   \r\n 		file. If you see this message choose â€œOpen.â€ <br> \r\n 	Linux users: The downloaded file should be in your â€˜Downloadsâ€™ folder. Find it in your \r\n 		file manager, double click and choose â€˜Installâ€™ in the GUI software center, or run \r\n 		the following commands, one at a time, in the terminal: <br> \r\n 		 	sudo dpkg -i downloaded_filename.deb\r\n 		 	sudo apt-get install -f <br> <br> \r\n4.	Make sure you have your Visual Studio Code application saved in a place you know you will easily be able to find it. <br> \r\n 	Windows users: It will automatically be placed in your Start menu. <br> \r\n 	Mac users: Click and drag the Visual Studio Code icon from the Downloads folder to the \r\n 		Applications folder. <br> \r\n 	Linux users: It should appear in your task bar of programs. <br> <br>\r\nThatâ€™s it, youâ€™ve successfully installed your text editor and are ready to start coding! <br> \r\n\r\nIf you want to learn how to use visual studio code, click this link: <br> https://www.youtube.com/watch?v=VqCgcpAypFQ\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<br> <br> \r\n 					    References<br> <br>\r\nCodeAcademy. (n.d.). Getting Started with Visual Studio Code and Building HTML Websites. Retrieved October 2021, from CodeAcademy: https://www.codecademy.com/articles/visual-studio-code <br> </br>\r\nGetting Started - Visual Studio Code. (n.d.). Retrieved October 2021, from code.visualstudio.com: https://code.visualstudio.com/docs\r\n\r\n'),
(3, 'PYTHON', '618e5f03b09ca1.80309509.jpeg', 47, '2021-11-12', 2, '<br> <br>\r\nPython is a high-level, general-purpose and a very popular programming language. Python programming language (latest Python 3) is being used in web development, Machine Learning applications, along with all cutting edge technology in Software Industry. Python Programming Language is very well suited for Beginners, also for experienced programmers with other programming languages like C++ and Java.  <br>  <br>\r\nBelow are some facts about Python Programming Language: <br>\r\n1.	Python is currently the most widely used multi-purpose, high-level programming language. <br>\r\n2.	Python allows programming in Object-Oriented and Procedural paradigms. <br>\r\n3.	Python programs generally are smaller than other programming languages like Java. Programmers have to type relatively less and indentation requirement of the language, makes them readable all the time. <br>\r\n4.	Python language is being used by almost all tech-giant companies like â€“ Google, Amazon, Facebook, Instagram, Dropbox, Uberâ€¦ etc. <br>\r\n5.	The biggest strength of Python is huge collection of standard library which can be used for the following: <br> \r\nâ€¢	Machine Learning <br>\r\nâ€¢	GUI Applications (like Kivy, Tkinter, PyQt etc. ) <br>\r\nâ€¢	Web frameworks like Django (used by YouTube, Instagram, Dropbox) <br>\r\nâ€¢	Image processing (like OpenCV, Pillow) <br>\r\nâ€¢	Web scraping (like Scrapy, BeautifulSoup, Selenium) <br>\r\nâ€¢	Test frameworks <br>\r\nâ€¢	Multimedia <br>\r\nâ€¢	Scientific computing <br>\r\nâ€¢	Text processing and many more.. <br>\r\n\r\nInstall Python â€” Full Installer <br> <br>\r\nStep 1: Select Version of Python to download Full Installer and install <br>\r\nThe most stable Windows downloads are available from the Python for Windows page. On Windows, you have a choice between 32-bit (labeled x86) and 64-bit (labeled x86â€“64) versions, and several flavors of the installer for each. Underneath the Python Releases for Windows find the Latest Python 3 Release â€” Python 3.9.4 <br> <br>\r\n \r\n \r\nStep 2: Download Python Executable Installer and install it <br>\r\nDouble-click the executable file, which is downloaded; the following window will open. Select Customize installation and proceed. Click on the Add Path check box, it will set the Python path automatically. <br>\r\n1.	Run the Python Installer once downloaded. (In this example, we have downloaded Python 3.9.4) <br>\r\n2.	Make sure you select the â€œInstall launcher for all usersâ€ and â€œAdd Python 3.9 to PATHâ€ checkboxes. <br>\r\n3.	Select Install Now â€” the recommended installation options. <br><br>\r\n\r\n \r\nStep 3: Wait for it to complete the installation process <br>\r\n\r\n \r\nThe next dialog will prompt you to select whether to Disable the path length limit. Choosing this option will allow Python to bypass the 260-character MAX_PATH limit. Effectively, it will enable Python to use long path names. <br>\r\n\r\n \r\nThe Disable path length limit option will not affect any other system settings. Turning it on will resolve potential name length issues that may arise with Python projects developed in Linux. <br> <br>\r\nStep 4: Verification of installation of python in Windows <br>\r\nTo check if Python 3.9.4 has been successfully installed in our system, <br>\r\nâ€¢	Open Cmd prompt in your system <br>\r\nâ€¢	Run â€œ Python -Vâ€ <br>\r\n \r\nStep 5: Run python <br> <br>\r\nKudos! python has been installed in your system, Now go to <br>\r\n1.	Windows search <br>\r\n2.	Type IDLE <br>\r\n3.	Open it. <br>\r\nRun your First Python code <br>\r\n \r\nHappy Coding <br> <br>\r\nStep 6: Verify Pip Was Installed <br>\r\nIf you opted to install an older version of Python, it is possible that it did not come with Pip preinstalled. Pip is a powerful package management system for Python software packages. Thus, make sure that you have it installed. <br>  <br>\r\nWe recommend using Pip for most Python packages, especially when working in virtual environments. <br>\r\n \r\nPip has not been installed yet if you get the following output: <br>\r\n\'pip\' is not recognized as an internal or external command,\r\nOperable program or batch file. <br> \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<br> <br> \r\n 					    References<br> <br>\r\n04, September, 2021 from GeeksforGeeks <br>\r\nhttps://www.geeksforgeeks.org/python-programming-language/ <br> <br>\r\n21, April, 2021 from Co-Learning Lounge <br>\r\nhttps://medium.com/co-learning-lounge/how-to-download-install-python-on-windows-2021-44a707994013 <br> <br>\r\n\r\n\r\n\r\n\r\n\r\n'),
(4, 'NETBEANS', '6191c566de21b6.61377068.png', 48, '2021-11-15', 0, '<br><br>\r\nNetBeans is a Java-based integrated development environment that underlying application platform framework. \r\n<br>\r\n	NetBeans IDE is a free, open source, integrated development environment (IDE) that enables you to develop desktop, mobile and web applications. The IDE supports application development in various languages, including Java, HTML5, PHP and C++. The IDE provides integrated support for the complete development cycle, from project creation through debugging, profiling and deployment. The IDE runs on Windows, Linux, Mac OS X, and other UNIX-based systems. \r\n<br>\r\nTools and capabilities of the NetBeans IDE include a feature-rich text editor with refactoring tools and code templates, high level and granular views of applications, a drag and drop GUI design, and versioning using out-of-the-box integration with tools such as Git. The NetBeans IDE can run on any operating system that supports a compatible JVM including Linux, Windows and OS X. \r\n<br><br>\r\nNetBeans manages the following platform features and components: <br>\r\nâ€¢	User settings <br>\r\nâ€¢	Windows (placement, appearance, etc.) <br>\r\nâ€¢	NetBeans Visual Library <br>\r\nâ€¢	Storage <br>\r\nâ€¢	Integrated development tools <br>\r\nâ€¢	Framework wizard \r\n<br>\r\nThe IDE provides comprehensive support for JDK 7 technologies and the most recent Java enhancements. It is the first IDE that provides support for JDK 7, Java EE 7, and JavaFX 2. The IDE fully supports Java EE using the latest standards for Java, XML, Web services, and SQL and fully supports the GlassFish Server, the reference implementation of Java EE. \r\n<br><br>\r\n\r\nHow To Install and Get Started with Java Programming (on Windows, Mac OS and Ubuntu) <br><br>\r\n1.1. How to Install NetBeans 8.2 <br>\r\nHow to Install NetBeans on Windows <br>\r\nStep 0: Install JDK <br>\r\nTo use NetBeans for Java programming, you need to first install Java Development Kit (JDK). See \"JDK - How to Install \". <br>\r\nStep 1: Download <br>\r\nDownload \"NetBeans IDE\" installer from http://netbeans.org/downloads/index.html . There are many \"bundles\" available. For beginners, choose the 1st entry \"Java SE\" (e.g., \"netbeans-8.2-javase-windows.exe \" 95MB). <br>\r\nStep 2: Run the Installer <br>\r\nRun the downloaded installer. <br><br>\r\nHow to Install NetBeans on Mac OS X <br>\r\nTo use NetBeans for Java programming, you need to first install JDK. Read \"How to install JDK on Mac \". <br>\r\nTo install NetBeans: <br>\r\n1.	Download NetBeans from http://netbeans.org/downloads/ . Set \"Platform\" to \"Mac OS X\". There are many \"bundles\" available. For beginners, choose \"Java SE\" (e.g., \"netbeans-8.2-javase-macosx.dmg \" 116MB). <br>\r\n2.	Double-click the download Disk Image (DMG) file. <br>\r\n3.	Double-click the \"NetBeans 8.x.mpkg\", and follow the instructions to install NetBeans. NetBeans will be installed under \"/Applications/NetBeans \". <br>\r\n4.	Eject the Disk Image (\".dmg\"). <br>\r\nYou can launch NetBeans from the \"Applications\". <br>\r\nNotes: To uninstall NetBeans, drag the \"/Applications/NetBeans\" folder to trash. <br><br>\r\n\r\nHow to Install NetBeans on Ubuntu Linux <br>\r\nTo use NetBeans for Java programming, you need to first install JDK. Read \"How to install JDK on Ubuntu\". <br>\r\nTo install NetBeans: <br>\r\n1.	Download NetBeans from http://netbeans.org/downloads/. Choose platform \"Linux (x86/x64)\" â‡’ \"Java SE\". You shall receive a sh file (e.g., \" netbeans-7.x-ml-javase-linux.sh\") in \"~/Downloads\". <br>\r\n2.	Set the downloaded sh file to executable and run the sh file. Open a Terminal <br>\r\n$ cd ~/Downloads <br>\r\n$ chmod a+x netbeans-7.x-ml-javase-linux.sh  // Set to executable for all (a+x) <br>\r\n$ .netbeans-7.x-ml-javase-linux.sh  // Run <br>\r\nFollow the instructions to install NetBeans. <br>\r\nTo start NetBeans, run the script \"netbeans\" in the NetBeans\' bin directory: <br>\r\n$ cd netbeans-bin-directory <br>\r\n$ ./netbeans\r\n\r\n<br><br><br><br>\r\nResources <br>\r\nhttps://www.theserverside.com/definition/NetBeans <br>\r\nhttps://www.techopedia.com/definition/24735/netbeans <br>\r\nhttps://docs.oracle.com/cd/E40938_01/doc.74/e40142/gs_nbeans.htm <br>\r\nhttps://learn.saylor.org/mod/book/view.php?id=26800&chapterid=2454 <br>\r\n'),
(5, 'DEV C++ PROGRAMING LANGUAGE', '619259d3c68976.88408336.png', 47, '2021-11-15', 0, 'https://www.programiz.com/cpp-programming\r\n<br> <br>\r\n\r\n 	C++ (said C plus plus) is an object-oriented computer language created by notable computer scientist Bjorne Stroustrop as part of the evolution of the C family of languages. It was developed as a cross-platform improvement of C to provide developers with a higher degree of control over memory and system resources. <br>\r\nSome call C++ â€œC with classesâ€ because it introduces object-oriented programming principles, including the use of defined classes, to the C programming language framework. Over time, C++ has remained a very useful language not only in computer programming itself, but in teaching new programmers about how object-oriented programming works. However, it does not support only object-oriented, but also procedural and functional. Thanks to its high flexibility and scalability, C++ can be used to develop a broad range of software, applications, browsers, Graphical User Interfaces (GUIs), operating systems, and games. <br>\r\nToday C++ is still very appreciated for its notable portability which allows developers to create programs that can run on different operating systems or platforms very easily. Despite being a high-level language, since C++ is still close to C it can be used for low-level manipulation due to its close relation with machine language. <br>\r\n<br>  <br>\r\nDisadvantages of C++ <br> <br>\r\nC++ shares some of the infamously hard to understand concepts that characterized C. In particular, pointers are a challenging concept to grasp, and their misuse may lead to system crashes and abnormal memory consumption. The lack of a garbage collector also makes hard to filter out unnecessary data. Another limit to C++ is the presence of security issues associated with the availability of pointers, global variables, and friend functions. <br> <br>\r\nTo install Dev C++ software, you need to follow the following steps. <br><br>\r\nStep 1) First you must download the Dev C++ on your Windows machine. Visit to Download Dev C++: http://www.bloodshed.net/ <br> <br>\r\nStep 2) There are packages for different Operating Systems. <br><br>\r\n \r\nStep 3) Under package Dev-C++ 5.0 (4.9.9.2) with Mingw/GCC 3.4.2 compiler and GDB 5.2.1 debugger (9.0 MB) Click on the link â€œDownload from SourceForgeâ€. <br> <br>\r\n9.1M\r\n71\r\nTop 10 Behavioral Interview Questions and Answers\r\n \r\nStep 4) This package will download C++ .exe file for Windows that can be used to install on Windows 7/8/XP/Vista/10. <br> <br>\r\n \r\nStep 5) You will direct to SourceForge website, and your C++ download will start automatically. <br>\r\nâ€¢	Click on save button to save. By default, it is saved in â€œDownloadsâ€ folder. <br>\r\nâ€¢	After the download completes, go to the saved .exe file and click on it to Run. <br>\r\nâ€¢	The installer will ask you a language to select. Select â€œEnglishâ€ and click on â€œOKâ€. <br>\r\n \r\nâ€¢	Then screen for license agreement will appear. Click on â€œI agreeâ€ to proceed further. <br> <br>\r\n \r\nStep 6) In this step, <br>\r\n1.	You can see different components of Dev C++ that will be installed with this package. <br>\r\n2.	Just click on â€œnextâ€ button. <br> <br>\r\n \r\nStep 7) In this step, <br>\r\n1.	By default, the destination folder is in C drive. You are free to change this destination folder but make sure you have enough memory. <br>\r\n2.	Click on â€œInstallâ€ button. <br>\r\n \r\nIn the next screen, installation begins <br>\r\n \r\nNow, Dev C++ is installed successfully on your Windows. Select â€ Run Dev C++â€ to run it and click on â€ Finishâ€ button. <br>\r\n \r\nThatâ€™s it! Now you are ready to compile your C or C++ programs with Dev C++ compiler. <br>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<br> <br> \r\n 					    References<br> <br>\r\nhttps://www.techopedia.com/definition/26184/c-plus-plus-programming-language <br>\r\nhttps://www.guru99.com/cpp-ide-download-install.html <br>\r\n\r\n<br> <br>\r\n\r\n\r\n\r\n'),
(7, 'Unlock your creativity with Reels on Facebook', 'blog_cover.png', 49, '2021-11-15', 0, 'Introduction<br>\r\nFacebook, American online social network service that is part of the company Meta Platforms. Facebook was founded in 2004 by Mark Zuckerberg, Eduardo Saverin, Dustin Moskovitz, and Chris Hughes, all of whom were students at Harvard University. Facebook became the largest social network in the world, with nearly three billion users as of 2021, and about half that number were using Facebook every day. The companyâ€™s headquarters are in Menlo Park, California.\r\nAccess to Facebook is free of charge, and the company earns most of its money from advertisements on the website. New users can create profiles, upload photos, join a preexisting group, and start new groups. The site has many components, including Timeline, a space on each userâ€™s profile page where users can post their content and friends can post messages; Status, which enables users to alert friends to their current location or situation; and News Feed, which informs users of changes to their friendsâ€™ profiles and status. Users can chat with each other and send each other private messages. Users can signal their approval of content on Facebook with the Like button, a feature that also appears on many other websites. Other services that are part of Meta Platforms are Instagram, a photo- and video-sharing social network; Messenger, an instant-messaging application; and WhatsApp, a text-message and VoIP service.<br><br>\r\n\r\nWhat are Reels on Facebook?<br>\r\nReels are fun and inspiring short videos consisting of music, audio, AR effects, text overlays and more, and you can now create them on the Facebook app on your mobile device! Your Reels are shared directly to your fans in their core News Feed and to new audiences in a dedicated Reels section in News Feed that gives people who are new to you the opportunity to discover and enjoy your creations.<br><br>\r\nWith Reels, you can:<br>\r\nGet Creative<br><br>\r\nStart creating Reels on your mobile device at the top of Feed or by selecting â€œCreateâ€ from the dedicated Reels section in News Feed. You can either record a clip (or a series of clips) in real time or upload an existing (or series of existing) pre-recorded video from your phoneâ€™s gallery, or you can use a combination of real-time and pre-recorded clips.\r\nBefore sharing a Reel, you can edit and trim clips to your desired length, or add effects, stickers and text. Youâ€™ll have access to a variety of creative editing tools, including:\r\nAudio: Add a song from the Facebook music library, or use your own original audio. Your original audio is attributed to you and can be used by the Facebook community to create their Reels.\r\nSpeed: Speed up or slow down a part of your video or audio while you record.\r\nEffects: Select one of the many effects to record multiple clips with different effects.\r\nTimer: Record a clip hands-free using the timer.\r\n\r\nReach New Audiences<br><br>\r\nWith Reels, you can share creations with your friends and followersâ€“and have the opportunity to be discovered by the larger Facebook community.\r\nSharing Your Reel: Once your Reel is ready to share, you can add a description and hashtags, and tag your friends.<br>\r\nSelect a default audience: You can also set the audience for your Reel, which will determine who can see it once itâ€™s shared. By default, Reels are set to Public for creators who are over 18. You can select a new Reels default audience or change the audience on a Reel-by-Reel basis at any time.\r\nReach your followers and new audiences: Reels can help you grow your community by making your content discoverable to the wider Facebook community. Your Reel will appear in News Feed for your followers, as well as the dedicated Reels section in News Feed for people not following you to discover.<br>\r\nRecommend your Instagram Reels on Facebook: If you are already creating Reels on Instagram, you can allow Facebook to recommend your Instagram Reels to new audiences on Facebookâ€“this may help you reach more people.<br><br>\r\nStand Out<br>\r\nHere are some tips to help you stand out from the crowd, which can help your Reels get discovered by more people.\r\nMake your Reels relatable: Think of something people can relate to, and add your take. Stay tuned to the latest trends, challenges and songs, and recreate these concepts with your own personal touch.<br><br>\r\nEngage your audiences: Whether itâ€™s fixing cars, cooking or dancing, create Reels that show off the skills that make you unique. Experiment with different types of content, like tutorials or comedy, and see what resonates most with your audience. You\'ll want to keep your audience engaged, and ensure that your content is entertaining. Bring your Reels to life with cool effects, music and text.\r\nTell a story: Be sure youâ€™re telling a story from beginning to end. Try adding a surprise or twist to keep the viewer intrigued. Create a script for your Reel before you record. Write down what each clip should look like and what the music will be for that moment.<br>\r\nInspire others: Encourage others to join the fun by creating their own Reel with a simple challenge, a cultural moment or a relatable everyday motion of life.<br><br>\r\nEarn Money<br>\r\nIn July, we announced that we are investing over $1 billion in creators across Facebook and Instagram through 2022. Starting today, we are offering Reels Play â€“ new bonus programs on Facebook and Instagram that allow you to earn money for the Reels you share.<br>\r\nReels Play on Facebook will pay a bonus to eligible Facebook creators whose Reels get at least 1000 views over a 30-day period on Facebook. Reels from creators in the invite-only program must meet our content monetization policies and the content must be owned by the creator in order to count towards the bonus.<br>\r\nThe Reels Play on Facebook bonus program is currently invite-only. Creators who are invited will be notified in the Facebook App and in Creator Studio and can sign up to learn more here.<br>\r\nThe Reels Play on Instagram will pay eligible Instagram creators for Reels views on Instagram and Facebook. Creators who are eligible to participate in the Instagram Reels Play bonus will be alerted directly in their Professional Dashboard in the Instagram app.<br><br>\r\nReferences:<br>\r\nFacebook for Creators. (2021, September 29). Unlock your creativity with Reels on Facebook. <br>Facebook Creators. https://www.facebook.com/creators/reels-for-facebook<br>\r\n'),
(8, 'Creator Spotlight: OGL', 'blog_cover.png', 49, '2021-11-15', 0, 'Check out how OGL started his streaming career on Facebook Gaming<br>\r\nWe are sharing inspiring stories from members of our Facebook Gaming community who have found success streaming on our platform. These creators started their streaming careers right here on Facebook Gaming and have since built a large community of fans.<br><br>\r\nMeet OGL<br>\r\nOGLâ€™s love for gaming started at a young age. It was a way for him to escape the real world and escape from stress. He always wanted to become a streamer and with the encouragement of his friends, he started streaming his favorite games on Facebook Gaming. During his first 3 streams, he was so nervous he didnâ€™t turn on his face cam. By staying consistent and trying new things, OGL was able to grow his page to 64K followers.<br>\r\nWhat OGL loves best about Facebook Gaming is that itâ€™s user friendly. He feels itâ€™s easier to obtain recognition and be discovered more easily. As a successful streamer, OGL plans to pass down what heâ€™s learned to other beginner streamers on the platform. Heâ€™s excited to be a mentor and his number one tip is, â€œYou donâ€™t need to be the best top notch gamer to be a successful streamer.â€\r\nWatch the video to hear the inspirational story from OGL himself.<br><br>\r\n\r\nReferences<br>\r\nCreator Spotlight: OGL. (2021, October 27). Facebook. <br>https://www.facebook.com/unsupportedbrowser\r\n'),
(9, 'XAMPP', '619260e657a135.79690348.jpg', 47, '2021-11-15', 0, '<br>\r\nXAMPP is one of the widely used cross-platform web servers, which helps developers to create and test their programs on a local webserver. It was developed by the Apache Friends, and its native source code can be revised or modified by the audience. It consists of Apache HTTP Server, MariaDB, and interpreter for the different programming languages like PHP and Perl. It is available in 11 languages and supported by different platforms such as the IA-32 package of Windows & x64 package of macOS and Linux. <br>\r\nXAMPP helps a local host or server to test its website and clients via computers and laptops before releasing it to the main server. It is a platform that furnishes a suitable environment to test and verify the working of projects based on Apache, Perl, MySQL database, and PHP through the system of the host itself. Among these technologies, Perl is a programming language used for web development, PHP is a backend scripting language, and MariaDB is the most vividly used database developed by MySQL. The detailed description of these components is given below. <br> <br>\r\n\r\nComponents of XAMPP \r\n<br> <br>\r\n1.	Cross-Platform: Different local systems have different configurations of operating systems installed in it. The component of cross-platform has been included to increase the utility and audience for this package of Apache distributions. It supports various platforms such as packages of Windows, Linus, and MAC OS. <br>\r\n2.	Apache: It is an HTTP a cross-platform web server. It is used worldwide for delivering web content. The server application has made free for installation and used for the community of developers under the aegis of Apache Software Foundation. The remote server of Apache delivers the requested files, images, and other documents to the user. <br>\r\n3.	MariaDB: Originally, MySQL DBMS was a part of XAMPP, but now it has been replaced by MariaDB. It is one of the most widely used relational DBMS, developed by MySQL. It offers online services of data storage, manipulation, retrieval, arrangement, and deletion. <br>\r\n4.	PHP: It is the backend scripting language primarily used for web development. PHP allows users to create dynamic websites and applications. It can be installed on every platform and supports a variety of database management systems. It was implemented using C language. PHP stands for Hypertext Processor. It is said to be derived from Personal Home Page tools, which explains its simplicity and functionality. <br>\r\n5.	Perl: It is a combination of two high-level dynamic languages, namely Perl 5 and Perl 6. Perl can be applied for finding solutions for problems based on system administration, web development, and networking. Perl allows its users to program dynamic web applications. It is very flexible and robust. <br>\r\n6.	phpMyAdmin: It is a tool used for dealing with MariaDB. Its version 4.0.4 is currently being used in XAMPP. Administration of DBMS is its main role. <br>\r\n7.	OpenSSL: It is the open-source implementation of the Secure Socket Layer Protocol and Transport Layer Protocol. Presently version 0.9.8 is a part of XAMPP. <br>\r\n8.	XAMPP Control Panel: It is a panel that helps to operate and regulate upon other components of the XAMPP. Version 3.2.1 is the most recent update. A detailed description of the control panel will be done in the next section of the tutorial. <br>\r\n9.	Webalizer: It is a Web Analytics software solution used for User logs and provide details about the usage. <br>\r\n10.	Mercury: It is a mail transport system, and its latest version is 4.62. It is a mail server, which helps to manage the mails across the web. <br>\r\n11.	Tomcat: Version 7.0.42 is currently being used in XAMPP. It is a servlet based on JAVA to provide JAVA functionalities. <br>\r\n12.	Filezilla: It is a File Transfer Protocol Server, which supports and eases the transfer operations performed on files. Its recently updated version is 0.9.41. <br> <br>\r\n\r\nXAMPP Format Support\r\n<br> <br>\r\nXAMPP is supported in three file formats: <br>\r\nâ€¢	.EXE- It is an extension used to denote executable files making it accessible to install because an executable file can run on a computer as any normal program. <br>\r\nâ€¢	.7z - 7zip file- This extension is used to denote compressed files that support multiple data compression and encryption algorithms. It is more favored by a formalist, although it requires working with more complex files. <br>\r\nâ€¢	.ZIP- This extension supports lossless compression of files. A Zipped file may contain multiple compressed files. The Deflate algorithm is mainly used for compression of files supported by this format. The .ZIP files are quite tricky to install as compared to .EXE <br> <br>\r\nThus .EXE is the most straightforward format to install, while the other two formats are quite complicated and complex to install. <br><BR>\r\n HOW TO INSTALL XAMPP.\r\nhttps://www.ionos.com/digitalguide/server/tools/xampp-tutorial-create-your-own-local-test-server/\r\n\r\nReferences:\r\nhttps://www.javatpoint.com/xampp     \r\n\r\n'),
(10, 'Meet @TheBeatles: the Fab Four brings their music to TikTok', 'blog_cover.png', 49, '2021-11-15', 0, 'Nearly 60 years after scoring their first-ever number one hit, The Beatles hold a special place in the hearts of music listeners across the globe. This #Rocktober, we are thrilled to announce that the Fab Four have officially joined TikTok, bringing dozens of their most-beloved songs with them. Fans on TikTok will be able to follow @TheBeatles, an account dedicated to the towering legacy of John, Paul, George, and Ringo.\r\nThe Beatles\' foray onto TikTok arrives in conjunction with the global release of the Let It Be albumâ€™s remixed and expanded Special Edition by Apple Corps Ltd./Capitol/UMe. Keep an eye on @TheBeatles for exclusive behind-the-scenes footage from the Let It Be sessions (the subject of Get Back, a forthcoming Peter Jackson-directed documentary coming to Disney+ this Thanksgiving weekend: November 25, 26 and 27), along with deep dives into the creation of individual songs, featuring interviews with Paul McCartney and Ringo Starr.\r\nFor the first time ever, creators will be able to soundtrack their videos with 36 of the most iconic songs from music\'s most beloved catalog. The Let It Be albumâ€™s 12 songs are now available as soundtracks for videos, including legendary hits like \"Get Back,\" \"Across The Universe,\" and the ever-staggering title track, along with cuts like the John & Paul-duet \"I\'ve Got A Feeling\" and the George Harrison-penned \"I Me Mine,\" the last song The Beatles ever finished as a group.\r\nIn addition to the songs from Let It Be, The Beatles have provided all of their No. 1 U.S. and UK hits for creators to use as officially-licensed TikTok sounds. The 27 songs range from 1962\'s \"Love Me Do\" to 1970\'s \"The Long and Winding Road,\" capturing a snapshot of the band as they evolved from pop phenomenon to studio innovators to cultural legends. TikTok creators will be able to express affection for their special someone with \"I Want To Hold Your Hand\" and \"Something\" (and, well, several other of the greatest rock & roll love songs ever recorded), weep along with \"Eleanor Rigby,\" and rock out to jams like \"Day Tripper,\" \"Paperback Writer,\" and their biggest-ever hit \"Hey Jude.\"\r\nJohn Lennonâ€™s solo catalog was launched on TikTok last October to celebrate his 80th birthday. Paul McCartney joined TikTok last December to help celebrate the release of his new album McCartney III, and he\'s been an amiable and jocular presence on the platform ever since. This past July, Ringo Starr joined TikTok as part of his annual #PeaceandLove birthday celebration. George Harrisonâ€™s solo catalog was launched in August, celebrating the release of his acclaimed All Things Must Pass album in a special 50th Anniversary Edition.\r\nThe arrival of The Beatles signals the beginning of #Rocktober, a month-long celebration of rock musicians on TikTok and the towering figures that paved the way for them.\r\nLet us \"Come Together\" to celebrate the presence of The Beatles on TikTok. Use the tag \"#TheBeatles\" to share a video soundtracked by your favorite of the newly-arrived tracks, and follow @TheBeatles for even more.\r\nNew to TikTok and want to see more? Getting involved couldn\'t be easier, simply download the app for free via the Apple App Store, Google Play or Amazon.<br><br>\r\n\r\nReferences<br>\r\nMeet @TheBeatles: the Fab Four brings their music to TikTok. (2021, October 15). Newsroom | TikTok. <br>https://newsroom.tiktok.com/en-us/meet-the-beatles-the-fab-four-brings-their-music-to-tiktok\r\n'),
(11, 'Ngrok Hosting â€“ Local Hosting Tunnel and Testing for your Website', '619301ba5199d5.62945012.png', 40, '2021-11-16', 0, 'source: https://ngrok.com/\r\n<br>\r\n Ngrok is a local hosting platform that allows you to publish a web server that is operating on your local machine to the world wide web. Simply inform ngrok of the port number on which your web server is listening, and it will allow anyone to access and view your website pages from anywhere in the globe.\r\n<br>\r\nDownload the ngrok software command in this link: https://ngrok.com/download\r\n\r\n<br>\r\n<br>\r\nSteps to Install: \r\n1.  UNZIP TO INSTALL\r\nOn Linux or OSX you can unzip ngrok from a terminal with the following command. On Windows, just double click ngrok.zip.   ïƒ  unzip /path/to/ngrok.zip\r\n<br><br>\r\n2.   CONNECT YOUR ACCOUNT\r\nYou should first sign up for an account in ngrok here <https://ngrok.com/> and after that a token will be displayed on your account. You will then need to take note of that and run the code for adding the token. Open you ngrok command file and run this command â€œ./ngrok authtoken <your_auth_token>â€ on ngrok command prompt. This will add your authtoken to your ngrok.yml file. Connecting an account will list your open tunnels in the dashboard, give you longer tunnel timeouts, and more. Visit the dashboard to get your auth token.\r\n<br><br>\r\n3.  FIRE IT UP\r\nTry running it from the command line:\r\n./ngrok help\r\n\r\nTo start a HTTP tunnel on port 80, run this code:\r\n./ngrok http 80\r\n<br><br>\r\nNote: The links for your website will be then displayed on the command prompt. Copy the link and share it to your groupmates or co-developers for the testing of your project website.\r\n<br><br>     \r\nReferences:\r\n\r\nNgrok.com. (n.d.). Ngrok. Retrieved from Ngrok.com: https://ngrok.com/\r\n\r\n\r\n'),
(12, 'WAMP â€“ A Tool for the Development of Web Applications', '6193023229d1f6.92382826.png', 40, '2021-11-16', 0, 'A Web development platform for Windows, WampServer enables you to develop dynamic Web applications using the PHP programming language as well as the MySQL and MariaDB database servers. In order to construct Web applications in an intuitive manner, WampServer installs everything for you. Tuning your server will be possible without ever accessing the settings file on the computer. WampServer is available in both 32-bit and 64-bit versions, and it is completely free (under the terms of the GPML license). Microsoft Windows XP Service Pack 3 (SP3) and Microsoft Windows Server 2003 are incompatible with WampServer (sourceforge.net, n.d.).\r\n<br><br>\r\nFeatures:\r\n<br>\r\n-Manage your Apache, MySQL and MariaDB services <br>\r\n-Install and switch Apache, MySQL, MariaDB and PHP releases <br>\r\n-Manage your servers settings <br>\r\n-Access your logs <br>\r\n-Access your settings files <br>\r\n-Create alias <br>\r\n-Use VirtualHost as hosters <br>\r\n<br><br>\r\nNote: <br>\r\n       Just install the software application, run it, then you can now create you own website application using PHP, and MySQL. <br>\r\n\r\n<br><br>\r\nReferences: <br>\r\nsourceforge.net. (n.d.). WampServer. Retrieved from https://sourceforge.net/projects/wampserver/\r\n\r\n'),
(14, '000webhost â€“ A server for your Website Application', '6193037ecf5ce9.77896956.png', 40, '2021-11-16', 0, 'source: https://ph.000webhost.com/ <br><br>\r\n 	000webhost is a free website hosting service that offers a variety of useful features, such as a website builder, WordPress support, and the absence of advertisements on the site. Users can upgrade to a paid plan in order to gain access to even more services and assistance, but according to our reviews, 000webhost is the best free web hosting solution for people who are truly on a tight budget. Thousands of websites are hosted on 000webhost\'s servers, and it is completely free. 000webhost had an overall rating of 3.5 stars given by the Digital.com readers, and the reviews frequently compliment this host on their quality, features, and overall value.(McGath, 2021).\r\n<br><br>\r\nIf you want entirely free web hosting, you\'ll almost always have to put advertisements on your site to get it. With 000webhost, on the other hand, you may create a website that is completely free of charge and does not contain any advertisements provided by the host. There are some limitations to what you can do with this free plan, of course, but it is still a realistic option for anyone looking to start a website for themselves, a group, or a small business. <br><br>\r\n\r\nGenerally speaking, 000webhost provides the following plans: <br>\r\n-	Free Web Hosting: 000webhost offers you with all of the essentials for hosting a single website at no charge. <br>\r\n-	Single Shared Hosting: For less than a $1 a month, you can get significantly more storage and bandwidth than you would get with the free plan, as well as a number of other features and benefits. <br>\r\n-	Shared Hosting Plan with Premium Features: Users who wish to host more than one website will be required to upgrade to at least the Premium Shared Hosting plan. It allows you to host an infinite number of websites, and it also includes services such as weekly backups and a free domain registration. <br>\r\n-	Business Shared Hosting: Daily backups and a free SSL certificate are two of the special benefits that come with 000webhost\'s most premium plan, which is available only to business customers. <br><br>\r\n 	\r\n 					 References<br>\r\nMcGath, G. (2021, November). Our Verdict: Outstanding Choice For Feature-Rich Free Hosting. Retrieved from digital.com: https://digital.com/best-web-hosting/000webhost/\r\n\r\n\r\n'),
(15, 'Communities: Talk about your thing with people who get you', 'blog_cover.png', 49, '2021-11-16', 1, 'Introduction<br>\r\nThereâ€™s always been a broad, weird and wonderful range of conversations on Twitter, but we havenâ€™t done enough to help connect people who are into the same things. And now, thatâ€™s changing. Starting today, weâ€™re testing Communities, a way to easily find and connect with people who want to talk about the same things you do.<br><br>\r\n\r\nTweet to your Community<br>\r\nSome conversations arenâ€™t for everyone, just the people who want to talk about the thing you want to talk about. When you join a Community, you can Tweet directly to that group instead of to all your followers. Only members in the same Community are able to reply and join the conversation so it stays intimate and relevant. \r\nWhile you can Tweet only to your Community for a focused conversation, Community pages and timelines are publicly available so anyone can read, Quote Tweet, and report Community Tweets. We want to continue to support public conversation and help people find Communities that match their interests, while also creating a more intimate space for conversation.<br><br>\r\n\r\nCreating, moderating, and finding Communities<br>\r\nWith Communities, moderators pick the focus, create the Community rules, and invite the people who will make it a great place for conversation. Think of Communities as places created for conversation where the vibe and tone is set by people who share the same interests and want to have relevant conversations. Moderators set the Community rules and can also invite others to moderate their space to keep things on track and focused. Right now, Community creation is limited but in the coming months, weâ€™ll allow more people to create Communities so everyone can talk about their thing, whatever it is. Some of the initial Communities weâ€™re testing surround popular conversations on Twitter. Examples include dogs, weather, sneakers, skincare, and astrology, with many more to come, reflecting more of the thriving and niche discussions on Twitter. You can let us know if you\'re interested in creating a Community here. Right now, you have to be invited to a Community by a moderator or another member, but we\'ll be adding more ways to discover and join Communities soon. \r\nSupporting healthy conversations in Communities\r\nHereâ€™s what weâ€™re doing to make Communities feel healthy initially, with more to come:\r\nâ€¢	Communities are publicly visible so everyone can see what\'s being discussed.\r\nâ€¢	All Communities and their members must follow the Twitter Rules. Both members and non-members of Communities can report any potential violations of the Twitter Rules to Twitter.\r\nâ€¢	All moderators have to continuously meet our eligibility requirements, including not violating the Twitter Rules. As we open up Community creation and moderation to more people, weâ€™ll continue to refine eligibility requirements. As we test initially, Community moderators are approved by Twitter.\r\nâ€¢	Adapting our Twitter Rules and enforcement actions to keep people safe with Communities. This includes developing ways to proactively identify potentially problematic Communities, new reporting flows, and bespoke enforcement actions.\r\nWeâ€™ll continue to do research, scenario plan, and work with outside experts including our Trust and Safety Council to keep people safe with Communities.\r\nThis is just the start for Communities â€“ weâ€™ll test, learn, and iterate based on your feedback. Members can access Communities through the dedicated tab at the bottom of the app for iOS, or in the sidebar on Twitter.com. People can read Community Tweets on Twitter for Android too with more functionality coming soon. Anyone globally can be invited to join a Community via Direct Messages. Learn more about how Communities work here.<br><br>\r\n\r\nREFERENCES<br>\r\nCommunities: Talk about your thing with people who get you. (n.d.). Twitter Blog. <br>https://blog.twitter.com/en_us/topics/product/2021/testing-communities\r\n'),
(16, 'NOTEPAD ++', '6194cbe1aecd54.54148595.png', 48, '2021-11-17', 0, 'Notepad++ is a free (as in â€œfree speechâ€ and also as in â€œfree beerâ€) source code editor and Notepad replacement that supports several languages. Running in the MS Windows environment, its use is governed by GNU General Public License.\r\n<br>\r\nNotepad++ is specially designed for editing source code. The \"++\" in the name is a reference to the increment operator in programming languages such as C, C++, Java, and JavaScript.\r\n<br>\r\nNotepad++ is useful anytime you need to make significant changes to a text file. \r\n<br>\r\nBased on the powerful editing component Scintilla, Notepad++ is written in C++ and uses pure Win32 API and STL which ensures a higher execution speed and smaller program size. By optimizing as many routines as possible without losing user friendliness, Notepad++ is trying to reduce the world carbon dioxide emissions. When using less CPU power, the PC can throttle down and reduce power consumption, resulting in a greener environment.\r\n<br><br>\r\nNotepad++ features\r\nâ€¢	Edit text files up to 2 GB in size (the maximum size in Windows Notepad is 58 MB). <br>\r\nâ€¢	Edit multiple files, organized in tabs. <br>\r\nâ€¢	Line numbering. <br>\r\nâ€¢	Syntax highlighting for over 70 programming languages, including HTML and Windows batch files. <br>\r\nâ€¢	Advanced find and replace, with support for regular expressions. <br>\r\nâ€¢	Create and edit text files for different operating systems, including macOS and Linux. <br>\r\nâ€¢	Split-screen for editing and viewing multiple files at once, or multiple parts of the same file. <br>\r\nâ€¢	Macros for recording a sequence of editing commands to be executed repeatedly. <br>\r\nâ€¢	Support for lines to have bookmarks. <br>\r\nâ€¢	A plugin system for adding features to the software. <br><br>\r\nHow to download and install Notepad++ editor <br>\r\n1.	Open the download page of the official website in your browser. <br>\r\n2.	Download the latest Notepad++ version to your desktop. You can select a few formats. Letâ€™s download the most common Installer. <br>\r\n3.	Open the folder with the downloaded package on your computer. Click twice the .exe file to run the Installer. <br>\r\n4.	Follow all installation steps: <br>\r\n1)	Select installation language. <br>\r\n2)	Agree to the terms of the License Agreement. <br>\r\n3)	Browse the installation directory on your computer. <br>\r\n4)	Select the type of installation. We recommend to use a Custom one. <br>\r\n5)	Choose the components for your Notepad++ installation and click Install to confirm. <br>\r\n6)	Please wait when the system finish installation. <br>\r\n5.	Thatâ€™s all! Now you are ready to use Notepad++ software for editing codes. <br>\r\n<br>\r\nResources <br>\r\nhttps://www.computerhope.com/jargon/n/notepad-plus-plus.htm <br>\r\nhttps://notepad-plus-plus.org/ <br>\r\nhttps://www.templatemonster.com/help/how-to-download-and-install-notepad-editor.html\r\n\r\n'),
(17, 'ECLIPSE', '6194cc2e570695.20712510.png', 48, '2021-11-17', 0, 'Eclipse is free and open-source, which means you can use it at no cost and access its source code if needed. Today, Eclipse is the most widely used IDE for developing Java applications, with millions of programmers using every day. The homepage of Eclipse is eclipse.org.\r\n<br>\r\nEclipse is an integrated development environment (IDE) for developing applications using the Java programming language and other programming languages such as C/C++, Python, PERL, Ruby etc.\r\n<br>\r\nThe Eclipse platform which provides the foundation for the Eclipse IDE is composed of plug-ins and is designed to be extensible using additional plug-ins. Developed using Java, the Eclipse platform can be used to develop rich client applications, integrated development environments and other tools. Eclipse can be used as an IDE for any programming language for which a plug-in is available.\r\n<br>\r\nThe Eclipse IDE is rich features IDE that supports various programming features for the developers and ease their work for development of advanced application in eclipse platform. It is mostly preferred for the java-based application development. It supports various programming languages that make the platform favorable for the programmers to use for application development.\r\n<br>\r\nSteps to Install Eclipse\r\n<br>\r\n1. Download the Eclipse Installer <br>\r\nDownload Eclipse Installer from http://www.eclipse.org/downloads <br>\r\nEclipse is hosted on many mirrors around the world. Please select the one closest to you and start to download the Installer <br>\r\n________________________________________\r\n2. Start the Eclipse Installer executable <br>\r\nFor Windows users, after the Eclipse Installer executable has finished downloading it should be available in your download directory. Start the Eclipse Installer executable. You may get a security warning to run this file. If the Eclipse Foundation is the Publisher, you are good to select Run. <br>\r\nFor Mac and Linux users, you will still need to unzip the download to create the Installer. Start the Installer once it is available. <br>\r\n\r\n3. Select the package to install <br>\r\nThe new Eclipse Installer shows the packages available to Eclipse users. You can search for the package you want to install or scroll through the list. <br>\r\nSelect and click on the package you want to install. <br>\r\n\r\n4. Select your installation folder <br>\r\nSpecify the folder where you want Eclipse to be installed. The default folder will be in your User directory. <br>\r\nSelect the â€˜Installâ€™ button to begin the installation. <br>\r\n\r\n5. Launch Eclipse <br>\r\nOnce the installation is complete you can now launch Eclipse. The Eclipse Installer has done it\'s work. Happy coding. <br><br><br><br><br>\r\n\r\nResources <br>\r\nhttps://www.tutorialspoint.com/eclipse/eclipse_overview.htm <br>\r\nhttps://www.codejava.net/ides/eclipse/what-is-eclipse-ide-for-beginner <br>\r\nhttps://www.educba.com/what-is-eclipse-ide/ <br>\r\nhttps://www.eclipse.org/downloads/packages/installer ');
INSERT INTO `blogs` (`blog_id`, `blog_title`, `blog_img`, `blog_by`, `blog_date`, `blog_votes`, `blog_content`) VALUES
(18, 'HTML â€“ HYPERTEXT MARKUP LANGUAGE', '6194e3ccba7e28.10758041.png', 47, '2021-11-17', 0, 'HTML (HyperText Markup Language) is the most basic building block of the Web. It defines the meaning and structure of web content. Other technologies besides HTML are generally used to describe a web page\'s appearance/presentation (CSS) or functionality/behavior (JavaScript). <br>\r\n\"Hypertext\" refers to links that connect web pages to one another, either within a single website or between websites. Links are a fundamental aspect of the Web. By uploading content to the Internet and linking it to pages created by other people, you become an active participant in the World Wide Web. <br> <br>\r\n\r\nThe History of HTML \r\n<br>\r\nHTML was first created by Tim Berners-Lee, Robert Cailliau, and others starting in 1989. It stands for Hyper Text Markup Language. <br>\r\nHypertext means that the document contains links that allow the reader to jump to other places in the document or to another document altogether. The latest version is known as HTML5. <br>\r\nA Markup Language is a way that computers speak to each other to control how text is processed and presented. To do this HTML uses two things: tags and attributes. <br> <br>\r\n\r\n\r\n\r\nRead more: <br>\r\n https://html.com/#ixzz7CTKzRKKj <br>\r\nhttps://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/HTML_basics\r\n\r\n <br>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<br> <br> \r\n 					    References<br> <br>\r\nhttps://developer.mozilla.org/en-US/docs/Web/HTML <br>\r\nhttps://html.com/ <br>\r\n\r\n\r\n'),
(19, 'KDEVELOP', '6194ed7d713cc5.73668316.jpg', 48, '2021-11-17', 0, 'KDevelop is a free and open-source integrated development environment (IDE) for Unix-like computer operating systems and Windows. It provides editing, navigation and debugging features for several programming languages, and integration with build automation and version-control systems, using a plugin-based architecture.\r\n<br>\r\nKDevelop is a modern integrated development environment (IDE) for C++ (and other languages) that is one of many KDE applications. As such it runs on LinuxÂ® (even if you run one of the other desktops, such as GNOME) but it is also available for most other variants of UNIXÂ® and for Windows as well.\r\n<br>\r\nFeatures of Kdevelop <br>\r\nSupported languages <br>\r\nThe following languages are fully supported, which means they have semantic syntax highlighting, code navigation and completion: <br>\r\nâ€¢	C/C++ and ObjC (backed by the Clang/LLVM libraries) <br>\r\no	Including some extra features for the Qt Framework <br>\r\no	Including language support for CUDA and OpenCL <br>\r\nâ€¢	Qt QML and JavaScript <br>\r\nâ€¢	Python* <br>\r\nâ€¢	PHP* <br>\r\nFor virtually all non-supported languages, there is still basic syntax highlighting and text-based code completion. <br>\r\nSupported version control systems <br>\r\nThe following version control systems have GUI integration: <br>\r\nâ€¢	Git: <br>\r\nâ€¢	Bazaar: <br>\r\nâ€¢	Subversion: <br>\r\nâ€¢	CVS: <br>\r\nâ€¢	Mercurial (hg)* : <br>\r\nâ€¢	Perforce (since 5.1) : <br>\r\nAn especially useful feature is the Annotate border, which shows who last changed a line and when. Showing the diff which introduced this change is just one click away! : <br>\r\n\r\nSupported build systems <br>\r\nThe following build systems are supported, which means that KDevelop can automatically obtain run and build targets as well as include paths from them: <br>\r\nâ€¢	CMake <br>\r\nâ€¢	QMake <br>\r\nâ€¢	Custom Makefiles (partially) <br>\r\nâ€¢	Generic build system (no automatic include path detection) <br>\r\nKDevelop knows how to invoke build automation tools such as make and ninja and has dedicated configuration pages for them. <br>\r\nInstalling KDevelop <br>\r\nUbuntu offers two ways for users to install KDevelop on their system. <br>\r\na) Installing KDevelop Using the Official Ubuntu Repository <br>\r\nKDevelop is included in the package management system of Ubuntu as part of its official repository. Thus, KDevelop can be installed easily in Ubuntu using the apt command. <br>\r\nHowever, before you install KDevelop, you must first run the update command so that the apt-cache and packages are updated to the latest version. This prevents any issues from arising later in the installation. <br>\r\nTo update the apt-cache and packages, open the terminal by hitting Ctrl+Alt+T or by searching â€˜terminalâ€™ in the Ubuntu Dash. Then, enter the following command in the terminal: <br>\r\n$ sudo apt-get update <br>\r\nKDevelop can now be installed by entering the following command in the terminal: <br>\r\n$ sudo apt-get install kdevelop <br>\r\nb) Installing KDevelop Using the AppImage <br>\r\nAn easier way of installing KDevelop is by using its AppImage. AppImages are packaging applications that can be run on Linux without having to install them. They offer an installation process similar to that of applications in Windows and macOS. To install the AppImage of KDevelop, open the official website of the program, and choose the â€˜Downloadâ€™ selection from the landing page. Click on the highlighted text mentioning â€˜AppImage,â€™ and this will download the application onto your system. <br>\r\nLinux Distributions <br>\r\nRun the KDevelop 5.5.2 (64bit) AppImage (verify file bu: GPG signature, key linked below). <br>\r\nIf you are more comfortable with the command-line interface, you can also run the following command to download the KDevelop AppImage onto your system: <br>\r\n$ wget -O KDevelop.AppImage https://download.kde.org/stable/kdevelop/ <br>\r\n5.5.2/bin/linux/KDevelop-5.5.2-x86_64.AppImage <br>\r\nAfter KDevelop has been downloaded, open the directory path of the download file and make it executable by running the following command: <br>\r\n$ chmod +x KDevelop-Version.AppImage <br>\r\nIn my case, the command would be as follows: <br>\r\n$ chmod +x KDevelop-5.5.2-x86_64.AppImage <br>\r\nNow, double-click on the AppImage file, click â€˜Executeâ€™ in the prompt, and KDevelop will start.\r\n<br>\r\nWindows <br>\r\nNo official pre-built installers available currently <br>\r\nâ€¢	Run the experimental KDevelop 5.5.0 (64bit) installer for Windows 7 or newer <br>\r\nNote that we don\'t ship a C/C++ compiler. Instructions on how to set up a compiler and build system for C++ development can be found here. <br>\r\nâ€¢	or install KDevelop via Chocolatey: <br>\r\nâ€¢	choco install kdevelop <br>\r\nâ€¢	or build KDevelop from source <br>\r\n<br>\r\nmacOS  <br>\r\nNo official pre-built installers available yet <br>\r\nâ€¢	Try to run the experimental KDevelop (64bit) DMG from KDE\'s \"Binary Factory\" (maintainers needed) <br>\r\nâ€¢	or build KDevelop from source  <br>\r\n\r\n<br><br><br><br><br>\r\nResources <br>\r\nhttps://www.kdevelop.org/features <br>\r\nhttps://docs.kde.org/trunk5/en/kdevelop/kdevelop/what-is-kdevelop.html <br>\r\nhttps://en.wikipedia.org/wiki/KDevelop <br>\r\nhttps://linuxhint.com/install_kdevelop_ubuntu/ <br>\r\nhttps://www.kdevelop.org/download \r\n'),
(21, 'WritersRecord Video presentation/Documentation', 'blog_cover.png', 40, '2021-11-19', 0, '<div class=\"iframe-container\">\r\n<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/JVByQHkqfOY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n</div>\r\n\r\nA documentation for a website application for managing writers record in a database.\r\n\r\n\r\n'),
(22, 'Difference Between Git and GitHub', '6198ec8d6976c2.31654830.png', 40, '2021-11-20', 1, '<div class=\"iframe-container\">\r\n<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/21Gl97tkbHU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n</div>\r\n<br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; What is the difference between Git and GitHub? Git is a version control system that enables you to manage and monitor the history of your source code. GitHub is a cloud-based hosting service for Git repositories that allows you to manage them. If you have open-source projects that use Git, GitHub is designed to assist you in managing them more effectively.\r\n\r\n<br> <br>\r\n\r\nReference: https://blog.devmountain.com/git-vs-github-whats-the-difference/'),
(23, 'Deploying Your Website to Heroku', '61990e6d7ae044.35888760.jpg', 40, '2021-11-20', 0, '<div class=\"iframe-container\">\r\n<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/EyEn5gREn_U\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n</div>\r\n\r\n<br><br>\r\nÂ Â Â Â Heroku is known for running apps in dynos â€“ which are really just virtual computers that can be powered up or down based on how big your application is. Think of dynos as malleable building blocks for running your app.\r\n<br> <br>\r\nÂ Â Â Â If you want to process more data or run more complex tasks, you are going to need to add more blocks(what is called scaling horizontally) or increase the size of the blocks (what is called scaling vertically). Heroku then charges you a monthly fee based on the number of dynos that you have and the size of each dyno.\r\n<br> <br>\r\nÂ Â Â Â Although Heroku charges you by the dyno, they arenâ€™t actually hosting your app. In fact, the entire Heroku platform, as well as every app built on Heroku is deployed to Amazon Web Services(AWS).'),
(24, 'BOOTSTRAP', 'blog_cover.png', 50, '2021-12-01', 0, '<br><br>\r\nBootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains CSS- and (optionally) JavaScript-based design templates for typography, forms, buttons, navigation, and other interface components. <br><br>\r\n\r\nBootstrap is an HTML, CSS & JS Library that focuses on simplifying the development of informative web pages (as opposed to web apps). The primary purpose of adding it to a web project is to apply Bootstrap\'s choices of color, size, font and layout to that project. As such, the primary factor is whether the developers in charge find those choices to their liking. Once added to a project, Bootstrap provides basic style definitions for all HTML elements. The result is a uniform appearance for prose, tables and form elements across web browsers. In addition, developers can take advantage of CSS classes defined in Bootstrap to further customize the appearance of their contents. For example, Bootstrap has provisioned for light- and dark-colored tables, page headings, more prominent pull quotes, and text with a highlight. <br><br>\r\n\r\nBootstrap also comes with several JavaScript components in the form of jQuery plugins. They provide additional user interface elements such as dialog boxes, tooltips, and carousels. Each Bootstrap component consists of an HTML structure, CSS declarations, and in some cases accompanying JavaScript code. They also extend the functionality of some existing interface elements, including for example an auto-complete function for input fields. <br><br>\r\n\r\n<br>\r\nSteps to Install Bootstrap<br>\r\nLet us discuss the steps required to install Bootstrap. <br>\r\n<br>\r\nStep 1: Use the below link to get bootstrap downloaded. Click on Download; the bootstrap package will be downloaded in a Zip folder. This folder contains the CSS and JS folders. <br>\r\nhttps://getbootstrap.com/docs/4.0/getting-started/download/<br>\r\nThe bootstrap package that is downloaded is ready to use compiled code, which can be easily integrated into the project. It consists of compiled and minified CSS bundles and Javascript Plugins. <br>\r\n<br>\r\nStep 2: Source file: Bootstrap can be compiled with its own asset pipeline with the help of javascript, sass and documentation files. <br>\r\nClick on Download Source to get the files downloaded. It contains js, CSS and other files. <br>\r\n<br>\r\nStep 3: Package Managers: Bootstrap can be installed in Node.js powered files or applications. <br>\r\n$ npm install bootstrap<br>\r\n<br>\r\nStep 4: For Node.js applications, bootstrap can be installed with help of yarn package as well. <br>\r\n$ yarn add bootstrap<br>\r\n<br>\r\nStep 5: If the user wants to install bootstrap for ruby gems applications<br>\r\n<br>\r\nUsing bundler: <br>\r\ngem â€˜bootstrapâ€™, â€˜~> 4.0.0â€™<br><br>\r\nWithout bundler: <br>\r\n$ gem install bootstrap â€“v 4.0.0<br><br>\r\nStep 6: The composer can be used to install and manage the bootstraps sass and javascript<br>\r\n$ Composer require twbs/bootstrap: 4.0.0<br>\r\n<br>\r\nStep 7: Using NuGet, you can install and manage bootstraps CSS and sass and javascript for.Net applications. <br>\r\n\r\nInstall-Package bootstrap<br>\r\nInstall-Package bootstrap.sass<br>\r\n<br>\r\nStep 8: Jquery is also being used with bootstrap files or installation folder. Jquery needs to be downloaded and place the Jquery file in Bootstrap root folder for experiencing the better user interface and most importantly Jquery enhances the features of bootstrap that provides the look more attractive and responsive. <br><br>\r\n\r\nStep 9: After executing the above steps, the developer can write the HTML code to link all the files for the HTML page and can open the HTML file to check the response. <br>\r\n\r\n<br><br>\r\nResources <br>\r\nhttps://en.wikipedia.org/wiki/Bootstrap_(front-end_framework) <br>\r\nhttps://www.educba.com/install-bootstrap/<br>\r\n'),
(25, ' JAVASCRIPT', 'blog_cover.png', 50, '2021-12-01', 0, 'JavaScript is a lightweight, interpreted programming language. It is designed for creating network-centric applications. It is complimentary to and integrated with Java. JavaScript is very easy to implement because it is integrated with HTML. It is open and cross-platform. <br><br>\r\nJavascript is the most popular programming language in the world and that makes it a programmerâ€™s great choice. Once you learnt Javascript, it helps you developing great front-end as well as back-end softwares using different Javascript based frameworks like jQuery, Node.JS etc. <br><br>\r\nJavascript helps you create really beautiful and crazy fast websites. You can develop your website with a console like look and feel and give your users the best Graphical User Experience. <br><br>\r\n<br>\r\nHow to Download JavaScript? <br>\r\nJavaScript is built into all the modern browsers, including Chrome, Safari, Firefox, Microsoft Edge, Opera, etc. If you are getting JavaScript disabled error on websites, it might be turned off on your PC or Mobile.<br>\r\nNote: You do not need to download JavaScript in the Google Chrome browser; itâ€™s part of the browser. Follow this setting to enable JS in your browser on Windows 10, Windows 7, or macOS. <br><br>\r\n\r\nSteps to Install JavaScript<br>\r\n1. Open the Google Chrome menu by clicking the menu button (â‹®) on the right top of the browser. <br>\r\n2. Click on Settings. <br>\r\n3. Scroll down to the Privacy and security section. <br>\r\n4. Click on Site settings. <br>\r\n5. Scroll down to the Content section and click on JavaScript. <br>\r\n6. Enable JavaScript if itâ€™s disabled. <br>\r\n7. It will show â€œAllowedâ€ when JavaScript is enabled. <br><br>\r\n\r\n<br><br>\r\nResources <br>\r\nhttps://javascriptdownload.org/ <br>\r\nhttps://www.tutorialspoint.com/javascript/index.htm <br>\r\nhttps://www.studytonight.com/javascript/javascript-features <br>\r\n'),
(26, 'NODE.JS', '61a752d9e05f44.00361042.jpeg', 50, '2021-12-01', 0, 'Node.js is an open-source, cross-platform, back-end JavaScript runtime environment that runs on the V8 engine and executes JavaScript code outside a web browser. Node.js lets developers use JavaScript to write command line tools and for server-side scriptingâ€”running scripts server-side to produce dynamic web page content before the page is sent to the user\'s web browser. <br>\r\n<br>\r\nNPM stands for Node Package Manager, which is an application and repository for developing and sharing JavaScript code. <br>\r\n<br><br>\r\nHow to Install Node.js and NPM on Windows<br>\r\nStep 1: Download Node.js Installer<br>\r\nIn a web browser, navigate to https://nodejs.org/en/download/. Click the Windows Installer button to download the latest default version. At the time this article was written, version 10.16.0-x64 was the latest version. The Node.js installer includes the NPM package manager. <br>\r\n<br>\r\nStep 2: Install Node.js and NPM from Browser<br>\r\n1. Once the installer finishes downloading, launch it. Open the downloads link in your browser and click the file. Or, browse to the location where you have saved the file and double-click it to launch. <br>\r\n2. The system will ask if you want to run the software â€“ click Run. <br>\r\n3. You will be welcomed to the Node.js Setup Wizard â€“ click Next. <br>\r\n\r\n4. On the next screen, review the license agreement. Click Next if you agree to the terms and install the software. <br>\r\n5. The installer will prompt you for the installation location. Leave the default location, unless you have a specific need to install it somewhere else â€“ then click Next. <br>\r\n6. The wizard will let you select components to include or remove from the installation. Again, unless you have a specific need, accept the defaults by clicking Next. <br>\r\n7. Finally, click the Install button to run the installer. When it finishes, click Finish. <br>\r\n\r\n<br>\r\nStep 3: Verify Installation<br>\r\nOpen a command prompt (or PowerShell), and enter the following: <br>\r\nnode -v<br>\r\nThe system should display the Node.js version installed on your system. You can do the same for NPM: <br>\r\nnpm -v<br><br>\r\n\r\n<br><br><br>\r\nResources <br>\r\nhttps://phoenixnap.com/kb/install-node-js-npm-on-windows<br>\r\nhttps://en.wikipedia.org/wiki/Node.js<br>\r\n'),
(27, 'Cisco Packet Tracer', '61a7544c033ea9.41544010.jpg', 50, '2021-12-01', 0, 'Cisco Packet Tracer is a network simulation which mainly runs Cisco and generic network devices. Cisco Packet Tracer supports languages like English, Spanish, Chinese, French, Arabic, Portuguese. Even there is a subscription for Cisco Packet Tracer it can be also used for free easily with Guest Login. Cisco Packet Tracer can run unlimited devices with no restriction. Generic devices like PC, Laptop, Server Printer, IP Phone, TV, Tablet are supported. The network can be simulated in a step by step or time based method for detailed and deep inspection. Also Cisco Packet Tracer can be installed and run on Windows 7, Windows 8, Windows 10 32-bit and 64-bit, Linux for 64-bit, MacOSX.\r\n<br><br>\r\nCisco Packet Tracer features <br>\r\nan array of simulated routing & switching protocols with STP, HSRP, RIP, OSPF, EIGRP, and BGP to the extent required by the current Cisco CCNA curriculum as well as application layer protocols (HTTP, DNS) to simulate network traffic. It also includes Cisco IOS 15 with licence features, wireless capabilities with WLC and lightweight access point, and security devices with ASA 5505 and 5506-X firewalls. <br>\r\n<br><br>\r\nDownload Packet Tracer<br>\r\nPacket Tracer can get in different ways. A google search will provide a lot of results to get packet tracer. I know that Packet tracer is a licensed application but recently it can be downloaded like a trial or personal use for free from different sites. The latest version 7.3.0 of the Cisco Packet Tracer can be downloaded from the following links. Cisco Packet Tracer is provided for Windows 10, Windows 8, Windows 7 as 32 and 64 bit, Linux for 64 bit, MacOSX.<br>\r\n<br><br><br>\r\nReferences: <br>\r\nhttps://www.packettracernetwork.com/<br>\r\nhttps://www.poftut.com/download-install-packet-tracer-windows/\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `blogvotes`
--

CREATE TABLE `blogvotes` (
  `voteId` int(11) NOT NULL,
  `voteBlog` int(11) NOT NULL,
  `voteBy` int(11) NOT NULL,
  `voteDate` date NOT NULL,
  `vote` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogvotes`
--

INSERT INTO `blogvotes` (`voteId`, `voteBlog`, `voteBy`, `voteDate`, `vote`) VALUES
(2, 3, 47, '2021-11-15', 1);

--
-- Triggers `blogvotes`
--
DELIMITER $$
CREATE TRIGGER `calc_blog_votes_after_delete` AFTER DELETE ON `blogvotes` FOR EACH ROW BEGIN

		update blogs
        set blogs.blog_votes = blogs.blog_votes - old.vote
        where blogs.blog_id = old.voteBlog;	

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `calc_blog_votes_after_insert` AFTER INSERT ON `blogvotes` FOR EACH ROW BEGIN
	
	update blogs
        set blogs.blog_votes = blogs.blog_votes + new.vote
        where blogs.blog_id = new.voteBlog;	
		
    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `calc_blog_votes_after_update` AFTER UPDATE ON `blogvotes` FOR EACH ROW BEGIN
	
		update blogs
        set blogs.blog_votes = blogs.blog_votes + (new.vote * 2)
        where blogs.blog_id = new.voteBlog;	
		
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(8) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_description`) VALUES
(1, 'Programming', 'All about programing.'),
(2, 'Graphic Design', 'All about graphic design'),
(3, 'Developer', 'all about being a developer'),
(4, 'Programming Errors', 'all errors and problem of a program'),
(5, 'Websites', 'how to make websites'),
(6, 'Applications', 'All about applications'),
(7, 'Presentations', 'All about graphical presentations...'),
(8, 'Freelancing', 'All about freelancing.'),
(10, 'Computer maintenance ', 'All about maintenance of computer.');

-- --------------------------------------------------------

--
-- Table structure for table `conversation`
--

CREATE TABLE `conversation` (
  `id` int(11) NOT NULL,
  `user_one` int(11) NOT NULL,
  `user_two` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `conversation`
--

INSERT INTO `conversation` (`id`, `user_one`, `user_two`) VALUES
(44, 41, 38),
(46, 41, 40),
(47, 41, 46),
(48, 40, 46),
(49, 40, 38),
(50, 40, 47),
(51, 40, 48),
(52, 41, 47),
(53, 41, 48),
(54, 40, 49),
(55, 41, 49),
(56, 41, 50),
(57, 40, 50),
(58, 51, 38),
(59, 51, 40),
(60, 51, 52),
(61, 52, 46),
(62, 40, 52),
(63, 40, 53);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_by` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  `event_date` varchar(10) NOT NULL,
  `event_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_by`, `title`, `date_created`, `event_date`, `event_image`) VALUES
(2, 40, 'Online Seminar About Git And GitHub For Beginners  ', '2021-11-16', '2022-01-05', '6193080de1faf4.72586295.png'),
(3, 40, 'Seminar for Ngrok Hosting Tutorial', '2021-11-16', '2022-01-10', '61930888b9a089.50557498.png'),
(4, 40, 'Online Seminar To Teach you to Work with WAMP', '2021-11-16', '2022-01-20', '619308bb5a2083.59419548.png'),
(5, 40, 'Online Seminar about Publishing a website application to 000webhost', '2021-11-16', '2022-03-02', '61930951443863.69670746.png'),
(7, 49, 'Justin Bieber Concert', '2021-11-16', '2022-10-13', 'event-cover.png'),
(8, 49, 'Ed Sheeran', '2021-11-16', '2022-04-22', 'event-cover.png'),
(9, 49, 'Adele Concert', '2021-11-16', '2022-06-24', 'event-cover.png'),
(17, 47, 'INTERNATIONAL PHP CONFERENCE', '2021-11-21', '2022-05-30', '619a19f6276b95.12875897.jpg'),
(18, 47, 'LONDON TECH WEEK', '2021-11-21', '2022-06-13', '619a1aa72ec319.16216702.png'),
(19, 47, 'DEEP LEARNING SUMMIT', '2021-11-21', '2022-10-19', '619a1b779e4519.35398355.jpg'),
(26, 48, 'Big Data and AI World', '2021-11-21', '2022-03-02', '619a2f2ad5bef3.19277973.jpeg'),
(27, 48, 'Infosecurity Europe', '2021-11-21', '2022-06-21', '619a2fa7850e14.88553886.jpg'),
(28, 48, 'Gartner Data & Analytics Summit 2022', '2021-11-21', '2022-03-14', '619a2fe219f072.26329025.jpg'),
(29, 48, 'Gartner Security and Risk Management Summit 2022', '2021-11-21', '2022-07-22', '619a302170c619.34298138.png'),
(30, 40, 'Data Center World', '2021-11-21', '2022-03-04', '619a34235bf9b8.20389363.jpg'),
(31, 50, 'Online Seminar about BOOTSTRAP for Newbie', '2021-12-05', '2022-05-15', '61acad59e593c4.38704755.jpg'),
(32, 50, 'Online Seminar about Cisco Packet Tracer', '2021-12-05', '2022-08-23', '61acae70a50633.23106404.png'),
(33, 50, 'Online Seminar about JavaScript from Basic to Advanced', '2021-12-05', '2022-01-12', 'event-cover.png'),
(34, 50, 'Online Seminar about Node.js for Beginners', '2021-12-05', '2022-03-31', '61acaf00ef8d26.49666037.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event_info`
--

CREATE TABLE `event_info` (
  `event_id` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `headline` varchar(5000) NOT NULL,
  `description` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_info`
--

INSERT INTO `event_info` (`event_id`, `event`, `title`, `headline`, `description`) VALUES
(2, 2, 'Online Seminar About Git And GitHub For Beginners  ', 'You Will Learn The Fundamentals Of Git And GitHub On This Seminar. ', 'Git is a version control system that lets you manage and keep track of your source code history. GitHub is a cloud-based hosting service that lets you manage Git repositories. If you have open-source projects that use Git, then GitHub is designed to help you better manage them. On this seminar, you will learn these innovative platforms, which were critical for your future job as an IT expert. '),
(3, 3, 'Seminar for Ngrok Hosting Tutorial', 'You will learn how to make your website to work with Ngrok Hosting. ', 'Ngrok is a local hosting platform that allows you to publish a web server that is operating on your local machine to the world wide web. Simply inform ngrok of the port number on which your web server is listening, and it will allow anyone to access and view your website pages from anywhere in the globe. You will know how to work with WAMP server to create your website application on this seminar.'),
(4, 4, 'Online Seminar To Teach you to Work with WAMP', 'You will learn the fundamentals WAMP platform on this seminar.', 'A Web development platform for Windows, WampServer enables you to develop dynamic Web applications using the PHP programming language as well as the MySQL and MariaDB database servers. In order to construct Web applications in an intuitive manner, WampServer installs everything for you. Tuning your server will be possible without ever accessing the settings file on the computer. WampServer is available in both 32-bit and 64-bit versions, and it is completely free (under the terms of the GPML license). Microsoft Windows XP Service Pack 3 (SP3) and Microsoft Windows Server 2003 are incompatible with WampServer. You will learn how to run your website on this platform through the seminar arranged by the admins.'),
(5, 5, 'Online Seminar about Publishing a website application to 000webhost', 'You will learn how to publish your website for free in 000webhost.', '000webhost is a free website hosting service that offers a variety of useful features, such as a website builder, WordPress support, and the absence of advertisements on the site. Users can upgrade to a paid plan in order to gain access to even more services and assistance, but according to our reviews, 000webhost is the best free web hosting solution for people who are truly on a tight budget. Thousands of websites are hosted on 000webhost\'s servers, and it is completely free. 000webhost had an overall rating of 3.5 stars given by the Digital.com readers, and the reviews frequently compliment this host on their quality, features, and overall value.'),
(7, 7, 'Justin Bieber Concert', 'Pop icon Justin Bieber announces 2022 concert in Tel Aviv', 'The â€œJustice World Tourâ€ is named after Justinâ€™s latest album, â€œJustice,â€ which was released in April 2021 and has amassed nearly 9 billion streams worldwide, including the hits â€œAnyone,â€ â€œLonelyâ€ and â€œHoly.â€'),
(8, 8, 'Ed Sheeran', 'Ed Sheeran +-=%x TOUR', '<div class=\"iframe-container\">\r\n<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/BaKwRXMoL1Q\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n</div>\r\nWant the latest news?\r\nFollow and Subscribe to be one of the first to know the latest news on Ed!'),
(15, 17, 'INTERNATIONAL PHP CONFERENCE', 'Help to have a clear background in PHP and know more about it.', 'Event: International PHP Conference <br>\r\nStart Date: 30 May 2022 <br>\r\nEnd Date: 3 June 2022 <br>\r\nLocation: FriedrichstraÃŸe 151, 10117 Berlin, Germany <br>\r\nVenue: Maritim Proarte Hotel <br>\r\nWebsite: https://phpconference.com\r\n<br>\r\n<br>\r\n<br>\r\nThe International PHP Conference is a must-attend event for web developers from around the world featuring in-depth workshops, and a chance to learn from the very best. Discover the exciting ways PHP can be combined with technologies such as Symfony, Docker, Kubernetes, JavaScript, and TypeScript. Learn about PHPâ€™s latest features, groundbreaking tools, test automation, cutting-edge web security tactics, and state-of-the-art web architectures.\r\n'),
(16, 18, 'LONDON TECH WEEK', 'The collaboration and discussion of the vital role of technology in the society.', 'Event: London Tech Week <br>\r\nStart Date: 13 June 2022 <br>\r\nEnd Date: 17 June 2022 <br>\r\nLocation: London, United Kingdom <br>\r\nVenue: Various <br>\r\nWebsite: https://londontechweek.com\r\n<br>\r\n<br>\r\n<br>\r\nLondon Tech Week will gather the worldâ€™s most inspirational founders, global leaders, senior investors and rising stars to collaborate and discuss the vital role of technology in society. The festivalâ€™s purpose is to showcase how tech is transforming both business and society by driving important conversations around transformation, diversity and innovation. Weâ€™ll unite the global tech ecosystem to inspire impactful innovation, building a better digital world for both business and society. \r\n<br>\r\nWe know how critical it is to make new connections, which is why London Tech Week is hyper-focused around network building. Our physical and virtual moments will bring together leaders, thinkers and doers to build relationships and connect.\r\n'),
(17, 19, 'DEEP LEARNING SUMMIT', 'Deeper knowledge about algorithms, pattern recognition and etc.', 'Event: Deep Learning Summit <br>\r\nStart Date: 19 October 2022 <br>\r\nEnd Date: 20 October 2022 <br>\r\nLocation: Harbour Square, Toronto, Canada M5J 1A6 <br>\r\nVenue: The Westin Harbour Castle <br>\r\nWebsite: https://www.re-work.co/events/deep-learning-summit-toronto-2022\r\n<br>\r\n<br>\r\n<br>\r\nThe event will explore the latest advances in deep learning algorithms and methods in speech and pattern recognition, neural networks, image analysis and NLP and their impact on the healthcare, manufacturing, search and transportation sectors.\r\n'),
(20, 26, 'Big Data and AI World', 'Exploring and expanding knowledge about data and AI.', 'Data is becoming an increasingly larger part of business. Ensure the success of your Big Data strategy by considering the human factor, and its role in modern life. Get expert advice on how to execute your management strategy and an overview of tools, techniques and tech providers. Stay protected against evolving and malicious actors by being informed on current threats and knowing best practices for security.'),
(21, 27, 'Infosecurity Europe', 'Deeper knowledge about the security that help you as a programmer.', 'Infosecurity Europe is a meeting place for cybersecurity experts, connecting practitioners with suppliers to find true solutions, and bringing together industry peers to network, share and ultimately, grow stronger and more resilient together.'),
(22, 30, 'Data Center World', 'Data Center World delivers expert insight and strategies on the technologies and concepts you need to know to plan, manage, and optimize your data center.', 'Event: Data Center World <br>\r\nStart Date: 28 March 2022 <br>\r\nEnd Date: 31 March 2022 <br>\r\nLocation: 500 E Cesar Chavez St, Austin, TX 78701, United States <br>\r\nVenue: Austin Convention Center <br>\r\nWebsite: https://www.datacenterworld.com/\r\n<br>\r\n<br>\r\n<br>\r\nThe longest running data center conference, addressing the needs of all data center and IT infrastructure management professionals. Attendees seek insight into how formal processes and industry tools can align IT goals with business goals to improve IT, operations, design/build, and facilities management.'),
(23, 31, 'Online Seminar about BOOTSTRAP for Newbie', 'You will learn how to make or style your web application by using Bootstrap.', 'Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains CSS- and (optionally) JavaScript-based design templates for typography, forms, buttons, navigation, and other interface components. Bootstrap is an HTML, CSS & JS Library that focuses on simplifying the development of informative web pages (as opposed to web apps). The primary purpose of adding it  to a web project is to apply Bootstrap\'s choices of color, size, font and layout to that project. As such, the primary factor is whether the developers in charge find those choices to their liking. Once added to a project, Bootstrap provides basic style definitions for all HTML elements. '),
(24, 32, 'Online Seminar about Cisco Packet Tracer', 'You will learn the visual simulation tool design by Cisco system.', 'Cisco Packet Tracer is a network simulation which mainly runs Cisco and generic network devices. Cisco Packet Tracer supports languages like English, Spanish, Chinese, French, Arabic, Portuguese. Even there is a subscription for Cisco Packet Tracer it can be also used for free easily with Guest Login. Cisco Packet Tracer can run unlimited devices with no restriction. Generic devices like PC, Laptop, Server Printer, IP Phone, TV, Tablet are supported. The network can be simulated in a step by step or time based method for detailed and deep inspection. Also Cisco Packet Tracer can be installed and run on Windows 7, Windows 8, Windows 10 32-bit and 64-bit, Linux for 64-bit, MacOSX.'),
(25, 33, 'Online Seminar about JavaScript from Basic to Advanced', 'You will learn the fundamentals of JavaScript on this seminar.', 'JavaScript is a lightweight, interpreted programming language. It is designed for creating network-centric applications. It is complimentary to and integrated with Java. JavaScript is very easy to implement because it is integrated with HTML. It is open and cross-platform. Javascript is the most popular programming language in the world and that makes it a programmerâ€™s great choice. Once you learnt Javascript, it helps you developing great front-end as well as back-end softwares using different Javascript based frameworks like jQuery, Node.JS etc. Javascript helps you create really beautiful and crazy fast websites. You can develop your website with a console like look and feel and give your users the best Graphical User Experience. '),
(26, 34, 'Online Seminar about Node.js for Beginners', 'You will learn the fundamentals of Node.js on this seminar.', 'Node.js is an open-source, cross-platform, back-end JavaScript runtime environment that runs on the V8 engine and executes JavaScript code outside a web browser. Node.js lets developers use JavaScript to write command line tools and for server-side scriptingâ€”running scripts server-side to produce dynamic web page content before the page is sent to the user\'s web browser. ');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `conversation_id` int(11) NOT NULL,
  `user_from` int(11) NOT NULL,
  `user_to` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `conversation_id`, `user_from`, `user_to`, `message`) VALUES
(1, 50, 40, 47, 'Hi'),
(2, 48, 40, 46, 'Hi there!'),
(3, 48, 40, 46, '&#128075;'),
(4, 46, 40, 41, '&#128075;'),
(5, 50, 40, 47, '&#128075;'),
(6, 51, 40, 48, '&#128075;'),
(7, 49, 40, 38, 'yoittoti'),
(8, 46, 41, 40, 'ðŸ‘‹'),
(9, 46, 40, 41, 'sdf'),
(10, 46, 40, 41, 'javascript:void(0)'),
(11, 46, 40, 41, 'Hi'),
(12, 59, 51, 40, 'Psst'),
(13, 60, 51, 52, 'Psst'),
(14, 60, 52, 51, 'Pangit ng profile. Pwe!'),
(15, 60, 51, 52, 'Ndi ko nga makita profile mo'),
(16, 59, 40, 51, 'dfhdh');

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE `polls` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `poll_desc` varchar(5000) NOT NULL,
  `locked` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `polls`
--

INSERT INTO `polls` (`id`, `subject`, `created`, `modified`, `status`, `created_by`, `poll_desc`, `locked`) VALUES
(3, 'Local Hosting for websites and projects', '2021-11-16 09:13:38', '2021-11-16 09:13:38', '1', 40, 'Choose what local hosting software you prefer.', 0),
(4, 'Code Editor for your website codes.', '2021-11-16 09:14:29', '2021-11-16 09:14:29', '1', 40, 'Choose what code editor you prefer for your website codes.', 0),
(5, 'Open source web servers', '2021-11-16 09:15:23', '2021-11-16 09:15:23', '1', 40, 'What Open source web servers do you prefer to use for your projects?', 0),
(6, 'Database Management System Software', '2021-11-16 09:16:17', '2021-11-16 09:16:17', '1', 40, 'Database management system Software you prefer:', 0),
(7, 'Local Hosting For Websites And Projects Edited', '2021-11-16 09:16:58', '2021-11-16 09:16:58', '1', 40, 'PHP IDE you mostly used on your projects:', 0),
(8, 'Webinar Software Platforms', '2021-11-16 09:18:19', '2021-11-16 09:18:19', '1', 40, 'Webinar Software Platforms you prefer:', 0),
(9, 'CPU for Gaming and Programming', '2021-11-16 09:19:23', '2021-11-16 09:19:23', '1', 40, 'Best CPU for Gaming and Programming that you prefer:', 0),
(10, 'PC Monitor in Gaming and Programming', '2021-11-16 09:20:13', '2021-11-16 09:20:13', '1', 40, 'Best PC Monitor for Gaming and Programming you prefer:', 0),
(11, 'Mouse for Gaming and Programming ', '2021-11-16 09:20:53', '2021-11-16 09:20:53', '1', 40, 'Best Mouse for Gaming and Programming that you Prefer:', 0),
(12, 'Laptops for Gaming and Programming', '2021-11-16 09:21:44', '2021-11-16 09:21:44', '1', 40, 'Best Laptops for Gaming and Programming that you prefer:', 0),
(13, 'Best mobile online game', '2021-11-16 16:52:25', '2021-11-16 16:52:25', '1', 49, '', 0),
(14, 'Best PC Online Games ', '2021-11-16 16:53:33', '2021-11-16 16:53:33', '1', 49, '', 0),
(15, 'How many hours a day do you spend online/on a Zoom call?', '2021-11-16 17:19:45', '2021-11-16 17:19:45', '1', 49, '', 0),
(16, 'If you could choose any age, to stay in for the rest of your life, which would it be?', '2021-11-16 17:24:10', '2021-11-16 17:24:10', '1', 49, '', 0),
(17, 'What is your current role?', '2021-11-16 17:25:03', '2021-11-16 17:25:03', '1', 49, '', 0),
(18, 'Whatâ€™s your favorite IDE for Java Development?', '2021-11-17 19:22:03', '2021-11-17 19:22:03', '1', 47, '', 0),
(19, 'Is Java a difficult language to learn?', '2021-11-17 19:25:03', '2021-11-17 19:25:03', '1', 47, '', 0),
(20, 'Whatâ€™s your favorite programming language?', '2021-11-17 19:43:17', '2021-11-17 19:43:17', '1', 47, '', 0),
(21, 'Correct order of operations for executing C program', '2021-11-17 20:25:55', '2021-11-17 20:25:55', '1', 48, 'What is the correct order of operations for executing the C program?', 0),
(22, 'Mother of all programming languages', '2021-11-17 20:30:22', '2021-11-17 20:30:22', '1', 48, 'What is the mother of all programming languages?', 0),
(23, 'What did you come for today?', '2021-11-18 13:44:23', '2021-11-18 13:44:23', '1', 49, '', 0),
(24, 'Do you have any previous experience with online learning?', '2021-11-18 13:46:37', '2021-11-18 13:46:37', '1', 49, '', 0),
(25, 'How comfortable are you with sourcing relevant information on the internet? ', '2021-11-18 13:46:56', '2021-11-18 13:46:56', '1', 49, '', 0),
(26, 'Would you need any help with adapting to online learning? ', '2021-11-18 13:47:08', '2021-11-18 13:47:08', '1', 49, '', 0),
(27, 'Have you ever used the internet to complete a school task? ', '2021-11-18 13:47:25', '2021-11-18 13:47:25', '1', 49, '', 0),
(28, 'How often do you use a computer away from school? ', '2021-11-18 13:47:59', '2021-11-18 13:47:59', '1', 49, '', 0),
(29, 'Do you support the use of gadgets during learning? (Phones, laptops)', '2021-11-18 13:48:20', '2021-11-18 13:48:20', '1', 49, '', 0),
(30, 'General programming languages for analytics/data mining', '2021-11-18 16:14:37', '2021-11-18 16:14:37', '1', 48, 'What general programming language for analytics/data mining?', 0),
(32, 'Constraint uniquely identified each record in the database', '2021-11-18 16:17:32', '2021-11-18 16:17:32', '1', 48, 'What constraint uniquely identified each record in the database?', 0),
(33, 'Specific occurrence of a class', '2021-11-18 16:18:26', '2021-11-18 16:18:26', '1', 48, 'What is a specific occurrence of a class and an instance of a class?', 0),
(34, 'Language that set of rules', '2021-11-18 16:19:40', '2021-11-18 16:19:40', '1', 48, 'Which language is the set of rules that tells the computer what operation to perform?', 0),
(36, 'Browser', '2021-11-21 11:44:02', '2021-11-21 11:44:02', '1', 47, 'Which is your favorite broswer?', 0),
(37, 'BEST SERVER FOR PHP', '2021-11-21 11:49:20', '2021-11-21 11:49:20', '1', 47, 'Which server is best for PHP?', 0),
(39, 'OPERATING SYSTEM', '2021-11-21 11:52:07', '2021-11-21 11:52:07', '1', 47, 'What\'s the OS on your primary work computer?', 0),
(41, 'Standard language for relational database management systems', '2021-11-21 16:12:28', '2021-11-21 16:12:28', '1', 48, 'What is the standard language for a relational database management system that handles organized data comprised of entities and relations between different entities of the data?', 0),
(42, 'PEAR in PHP', '2021-11-21 16:14:06', '2021-11-21 16:14:06', '1', 48, 'What does PEAR stand for in PHP?', 0),
(43, 'Types of language', '2021-11-21 16:15:10', '2021-11-21 16:15:10', '1', 48, 'What type of languages can easily interact with the hardware?', 0),
(44, 'The latest programming platform used by developers', '2021-12-08 19:19:38', '2021-12-08 19:19:38', '1', 50, 'Choose what is the best latest programming platform you prefer.', 0),
(45, 'Graphic Design Software', '2021-12-08 19:20:10', '2021-12-08 19:20:10', '1', 50, 'Choose what is the best graphic design software you prefer.', 0),
(46, 'Freelance Websites', '2021-12-08 19:20:59', '2021-12-08 19:20:59', '1', 50, 'Choose what is the best freelance websites that you prefer.', 0),
(47, 'Battle of processor prowess', '2021-12-08 19:21:22', '2021-12-08 19:21:22', '1', 50, 'Choose which CPUs are better for you.', 0),
(48, 'Keyboard for Gaming and Programming', '2021-12-08 19:21:55', '2021-12-08 19:21:55', '1', 50, 'Best keyboard for gaming and programming that you prefer.', 0),
(49, 'Graphics card for Gaming and programming', '2021-12-08 19:22:30', '2021-12-08 19:22:30', '1', 50, 'Best Graphics card for gaming and programming that you prefer.\r\n\r\n', 0),
(50, 'Gaming phones for Android and IOS', '2021-12-08 19:23:00', '2021-12-08 19:23:00', '1', 50, 'Best gaming phones for Android and IOS that you prefer.', 0),
(51, 'Internet Service Providers', '2021-12-08 19:23:50', '2021-12-08 19:23:50', '1', 50, 'Best Internet Service Providers for online class that you prefer.', 0),
(52, 'Online Trading Brokers', '2021-12-08 19:24:14', '2021-12-08 19:24:14', '1', 50, 'Best sites for Online Trading that you prefer.', 0),
(53, 'Budget laptop for gaming and programming', '2021-12-08 19:24:47', '2021-12-08 19:24:47', '1', 50, 'Best budget laptop for gaming and programming that you prefer.\r\n\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `poll_options`
--

CREATE TABLE `poll_options` (
  `id` int(11) NOT NULL,
  `poll_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `poll_options`
--

INSERT INTO `poll_options` (`id`, `poll_id`, `name`, `created`, `modified`, `status`) VALUES
(7, 3, 'ngrok', '2021-11-16 09:13:38', '2021-11-16 09:13:38', '1'),
(8, 3, 'serveo', '2021-11-16 09:13:38', '2021-11-16 09:13:38', '1'),
(9, 3, 'Pagekite', '2021-11-16 09:13:38', '2021-11-16 09:13:38', '1'),
(10, 3, 'Teleconsole', '2021-11-16 09:13:38', '2021-11-16 09:13:38', '1'),
(11, 4, 'VS code', '2021-11-16 09:14:29', '2021-11-16 09:14:29', '1'),
(12, 4, 'Sublime', '2021-11-16 09:14:29', '2021-11-16 09:14:29', '1'),
(13, 4, 'Notepad', '2021-11-16 09:14:29', '2021-11-16 09:14:29', '1'),
(14, 4, 'Notepad++ ', '2021-11-16 09:14:29', '2021-11-16 09:14:29', '1'),
(15, 5, 'Apache HTTP Server', '2021-11-16 09:15:23', '2021-11-16 09:15:23', '1'),
(16, 5, 'NGINX', '2021-11-16 09:15:23', '2021-11-16 09:15:23', '1'),
(17, 5, 'Apache Tomcat', '2021-11-16 09:15:23', '2021-11-16 09:15:23', '1'),
(18, 5, 'Node.js', '2021-11-16 09:15:23', '2021-11-16 09:15:23', '1'),
(19, 6, 'MySQL', '2021-11-16 09:16:17', '2021-11-16 09:16:17', '1'),
(20, 6, 'Oracle Database', '2021-11-16 09:16:17', '2021-11-16 09:16:17', '1'),
(21, 6, 'PostgreSQL', '2021-11-16 09:16:17', '2021-11-16 09:16:17', '1'),
(22, 6, 'Microsoft Access', '2021-11-16 09:16:17', '2021-11-16 09:16:17', '1'),
(23, 7, 'Ngrok Edited', '2021-11-16 09:16:58', '2021-11-16 09:16:58', '1'),
(24, 7, 'Ngrok Edited', '2021-11-16 09:16:58', '2021-11-16 09:16:58', '1'),
(25, 7, 'Ngrok Edited', '2021-11-16 09:16:58', '2021-11-16 09:16:58', '1'),
(26, 7, 'Ngrok Edited', '2021-11-16 09:16:58', '2021-11-16 09:16:58', '1'),
(27, 8, 'Demio', '2021-11-16 09:18:19', '2021-11-16 09:18:19', '1'),
(28, 8, 'Livestorm', '2021-11-16 09:18:19', '2021-11-16 09:18:19', '1'),
(29, 8, 'EverWebinar', '2021-11-16 09:18:19', '2021-11-16 09:18:19', '1'),
(30, 8, 'WebinarJam', '2021-11-16 09:18:19', '2021-11-16 09:18:19', '1'),
(31, 9, 'Intel Core i5 12600K', '2021-11-16 09:19:23', '2021-11-16 09:19:23', '1'),
(32, 9, 'Intel Core i9 12900K', '2021-11-16 09:19:23', '2021-11-16 09:19:23', '1'),
(33, 9, 'AMD Ryzen 5 5600X ', '2021-11-16 09:19:23', '2021-11-16 09:19:23', '1'),
(34, 9, 'AMD Ryzen 9 5900X', '2021-11-16 09:19:23', '2021-11-16 09:19:23', '1'),
(35, 10, 'LG 27GN950-B', '2021-11-16 09:20:13', '2021-11-16 09:20:13', '1'),
(36, 10, 'Gigabyte G27Q', '2021-11-16 09:20:13', '2021-11-16 09:20:13', '1'),
(37, 10, 'Dell S2722DGM', '2021-11-16 09:20:13', '2021-11-16 09:20:13', '1'),
(38, 10, 'Alienware 25 AW2521HF', '2021-11-16 09:20:13', '2021-11-16 09:20:13', '1'),
(39, 11, 'Razer DeathAdder V2', '2021-11-16 09:20:53', '2021-11-16 09:20:53', '1'),
(40, 11, 'Logitech G203 Lightsync', '2021-11-16 09:20:53', '2021-11-16 09:20:53', '1'),
(41, 11, 'Razer Naga Pro', '2021-11-16 09:20:53', '2021-11-16 09:20:53', '1'),
(42, 11, 'SteelSeries Prime Wireless', '2021-11-16 09:20:53', '2021-11-16 09:20:53', '1'),
(43, 12, 'Acer Nitro 5 AN515-55-53E5 Laptop', '2021-11-16 09:21:44', '2021-11-16 09:21:44', '1'),
(44, 12, 'ASUS TUF Gaming F17 Laptop', '2021-11-16 09:21:44', '2021-11-16 09:21:44', '1'),
(45, 12, 'Alienware M15 R6 Laptop', '2021-11-16 09:21:44', '2021-11-16 09:21:44', '1'),
(46, 12, 'Razer Blade 15 Advanced Gaming Laptop', '2021-11-16 09:21:44', '2021-11-16 09:21:44', '1'),
(47, 13, 'Mobile Legends: Bang Bang (MLBB)', '2021-11-16 16:52:25', '2021-11-16 16:52:25', '1'),
(48, 13, 'Call of Duty: Mobile (CODM)', '2021-11-16 16:52:25', '2021-11-16 16:52:25', '1'),
(49, 13, 'League of Legends: Wild Rift', '2021-11-16 16:52:25', '2021-11-16 16:52:25', '1'),
(50, 13, 'PUBG Mobile', '2021-11-16 16:52:25', '2021-11-16 16:52:25', '1'),
(51, 14, 'Dota', '2021-11-16 16:53:33', '2021-11-16 16:53:33', '1'),
(52, 14, 'Valorant', '2021-11-16 16:53:33', '2021-11-16 16:53:33', '1'),
(53, 14, 'Apex Legend', '2021-11-16 16:53:33', '2021-11-16 16:53:33', '1'),
(54, 14, 'Call of Duty: Warzone', '2021-11-16 16:53:33', '2021-11-16 16:53:33', '1'),
(55, 15, '1-2 hours', '2021-11-16 17:19:45', '2021-11-16 17:19:45', '1'),
(56, 15, ' 2-5 hours', '2021-11-16 17:19:45', '2021-11-16 17:19:45', '1'),
(57, 15, 'I lost count', '2021-11-16 17:19:45', '2021-11-16 17:19:45', '1'),
(58, 16, '<10', '2021-11-16 17:24:10', '2021-11-16 17:24:10', '1'),
(59, 16, '11-20', '2021-11-16 17:24:10', '2021-11-16 17:24:10', '1'),
(60, 16, '21-30', '2021-11-16 17:24:10', '2021-11-16 17:24:10', '1'),
(61, 16, '31-50', '2021-11-16 17:24:10', '2021-11-16 17:24:10', '1'),
(62, 16, '51-70', '2021-11-16 17:24:10', '2021-11-16 17:24:10', '1'),
(63, 17, 'Marketing', '2021-11-16 17:25:03', '2021-11-16 17:25:03', '1'),
(64, 17, 'IT', '2021-11-16 17:25:03', '2021-11-16 17:25:03', '1'),
(65, 17, 'Business Development', '2021-11-16 17:25:03', '2021-11-16 17:25:03', '1'),
(66, 17, 'Technical Development', '2021-11-16 17:25:03', '2021-11-16 17:25:03', '1'),
(67, 17, 'Sales', '2021-11-16 17:25:03', '2021-11-16 17:25:03', '1'),
(68, 17, 'Accounting', '2021-11-16 17:25:03', '2021-11-16 17:25:03', '1'),
(69, 17, 'Other', '2021-11-16 17:25:03', '2021-11-16 17:25:03', '1'),
(70, 18, 'ECLIPSE', '2021-11-17 19:22:03', '2021-11-17 19:22:03', '1'),
(71, 18, 'NETBEANS', '2021-11-17 19:22:03', '2021-11-17 19:22:03', '1'),
(72, 18, 'JDEVELOPER', '2021-11-17 19:22:04', '2021-11-17 19:22:04', '1'),
(73, 18, 'INTELLIJ IDEA', '2021-11-17 19:22:04', '2021-11-17 19:22:04', '1'),
(74, 19, 'YES', '2021-11-17 19:25:03', '2021-11-17 19:25:03', '1'),
(75, 19, 'NO', '2021-11-17 19:25:03', '2021-11-17 19:25:03', '1'),
(76, 19, 'MAYBE', '2021-11-17 19:25:03', '2021-11-17 19:25:03', '1'),
(77, 20, 'PHP', '2021-11-17 19:43:17', '2021-11-17 19:43:17', '1'),
(78, 20, 'PYTHON', '2021-11-17 19:43:17', '2021-11-17 19:43:17', '1'),
(79, 20, 'C#', '2021-11-17 19:43:17', '2021-11-17 19:43:17', '1'),
(80, 20, 'JAVA', '2021-11-17 19:43:17', '2021-11-17 19:43:17', '1'),
(81, 21, 'Translating, loading, executing, linking', '2021-11-17 20:25:55', '2021-11-17 20:25:55', '1'),
(82, 21, 'Linking, loading, executing, translating', '2021-11-17 20:25:55', '2021-11-17 20:25:55', '1'),
(83, 21, 'Loading, translating, linking, executing', '2021-11-17 20:25:55', '2021-11-17 20:25:55', '1'),
(84, 21, 'Translating, linking, loading, executing', '2021-11-17 20:25:56', '2021-11-17 20:25:56', '1'),
(85, 21, 'Linking, executing, translating, loading', '2021-11-17 20:25:56', '2021-11-17 20:25:56', '1'),
(86, 21, 'Loading, executing, linking, translating', '2021-11-17 20:25:56', '2021-11-17 20:25:56', '1'),
(87, 22, 'C++', '2021-11-17 20:30:22', '2021-11-17 20:30:22', '1'),
(88, 22, 'Python', '2021-11-17 20:30:22', '2021-11-17 20:30:22', '1'),
(89, 22, 'JavaScript', '2021-11-17 20:30:22', '2021-11-17 20:30:22', '1'),
(90, 22, 'C', '2021-11-17 20:30:22', '2021-11-17 20:30:22', '1'),
(91, 22, 'Rust', '2021-11-17 20:30:22', '2021-11-17 20:30:22', '1'),
(92, 22, 'Java', '2021-11-17 20:30:22', '2021-11-17 20:30:22', '1'),
(93, 23, 'Learn new skills', '2021-11-18 13:44:23', '2021-11-18 13:44:23', '1'),
(94, 23, 'Pick up all the important information', '2021-11-18 13:44:23', '2021-11-18 13:44:23', '1'),
(95, 23, 'To make new connections', '2021-11-18 13:44:23', '2021-11-18 13:44:23', '1'),
(96, 24, 'Yes', '2021-11-18 13:46:37', '2021-11-18 13:46:37', '1'),
(97, 24, 'No', '2021-11-18 13:46:37', '2021-11-18 13:46:37', '1'),
(98, 25, 'Very comfortable', '2021-11-18 13:46:56', '2021-11-18 13:46:56', '1'),
(99, 25, 'Somewhat comfortable', '2021-11-18 13:46:56', '2021-11-18 13:46:56', '1'),
(100, 25, 'Uncomfortable', '2021-11-18 13:46:56', '2021-11-18 13:46:56', '1'),
(101, 26, 'Yes ', '2021-11-18 13:47:08', '2021-11-18 13:47:08', '1'),
(102, 26, 'No', '2021-11-18 13:47:08', '2021-11-18 13:47:08', '1'),
(103, 27, 'Yes', '2021-11-18 13:47:25', '2021-11-18 13:47:25', '1'),
(104, 27, 'No ', '2021-11-18 13:47:25', '2021-11-18 13:47:25', '1'),
(105, 28, 'Always', '2021-11-18 13:47:59', '2021-11-18 13:47:59', '1'),
(106, 28, 'Seldomly', '2021-11-18 13:47:59', '2021-11-18 13:47:59', '1'),
(107, 28, 'I don\'t use a computer after school hours.', '2021-11-18 13:47:59', '2021-11-18 13:47:59', '1'),
(108, 29, 'Yes', '2021-11-18 13:48:20', '2021-11-18 13:48:20', '1'),
(109, 29, 'No', '2021-11-18 13:48:20', '2021-11-18 13:48:20', '1'),
(110, 30, 'Python', '2021-11-18 16:14:37', '2021-11-18 16:14:37', '1'),
(111, 30, 'R', '2021-11-18 16:14:37', '2021-11-18 16:14:37', '1'),
(112, 30, 'SQL', '2021-11-18 16:14:37', '2021-11-18 16:14:37', '1'),
(113, 30, 'Big Data', '2021-11-18 16:14:37', '2021-11-18 16:14:37', '1'),
(114, 30, 'SAS', '2021-11-18 16:14:37', '2021-11-18 16:14:37', '1'),
(115, 30, 'Java', '2021-11-18 16:14:37', '2021-11-18 16:14:37', '1'),
(122, 32, 'Unique Key', '2021-11-18 16:17:32', '2021-11-18 16:17:32', '1'),
(123, 32, 'Primary Key', '2021-11-18 16:17:32', '2021-11-18 16:17:32', '1'),
(124, 32, 'Foreign Key', '2021-11-18 16:17:32', '2021-11-18 16:17:32', '1'),
(125, 32, 'Secondary Key', '2021-11-18 16:17:32', '2021-11-18 16:17:32', '1'),
(126, 32, 'Candidate Key', '2021-11-18 16:17:32', '2021-11-18 16:17:32', '1'),
(127, 33, 'Class', '2021-11-18 16:18:26', '2021-11-18 16:18:26', '1'),
(128, 33, 'Method', '2021-11-18 16:18:26', '2021-11-18 16:18:26', '1'),
(129, 33, 'Object', '2021-11-18 16:18:26', '2021-11-18 16:18:26', '1'),
(130, 33, 'Variables', '2021-11-18 16:18:26', '2021-11-18 16:18:26', '1'),
(131, 33, 'Properties', '2021-11-18 16:18:26', '2021-11-18 16:18:26', '1'),
(132, 34, 'Machine Language', '2021-11-18 16:19:40', '2021-11-18 16:19:40', '1'),
(133, 34, 'Procedural Language', '2021-11-18 16:19:40', '2021-11-18 16:19:40', '1'),
(134, 34, 'Command Language', '2021-11-18 16:19:40', '2021-11-18 16:19:40', '1'),
(135, 34, 'Programming Language', '2021-11-18 16:19:40', '2021-11-18 16:19:40', '1'),
(136, 34, 'Assembly Language', '2021-11-18 16:19:40', '2021-11-18 16:19:40', '1'),
(139, 36, 'EDGE', '2021-11-21 11:44:02', '2021-11-21 11:44:02', '1'),
(140, 36, 'FIREFOX', '2021-11-21 11:44:02', '2021-11-21 11:44:02', '1'),
(141, 36, 'CHROME', '2021-11-21 11:44:02', '2021-11-21 11:44:02', '1'),
(142, 36, 'SAFARI', '2021-11-21 11:44:02', '2021-11-21 11:44:02', '1'),
(143, 37, 'XAMPP', '2021-11-21 11:49:20', '2021-11-21 11:49:20', '1'),
(144, 37, 'LAMP', '2021-11-21 11:49:20', '2021-11-21 11:49:20', '1'),
(145, 37, 'LEMP', '2021-11-21 11:49:20', '2021-11-21 11:49:20', '1'),
(146, 37, 'MAMP', '2021-11-21 11:49:20', '2021-11-21 11:49:20', '1'),
(147, 37, 'WAMP', '2021-11-21 11:49:20', '2021-11-21 11:49:20', '1'),
(148, 37, 'AMPSS', '2021-11-21 11:49:20', '2021-11-21 11:49:20', '1'),
(151, 39, 'WINDOWS10', '2021-11-21 11:52:07', '2021-11-21 11:52:07', '1'),
(152, 39, 'MAC OS X', '2021-11-21 11:52:07', '2021-11-21 11:52:07', '1'),
(153, 39, 'LINUX', '2021-11-21 11:52:07', '2021-11-21 11:52:07', '1'),
(154, 39, 'CHROME OS', '2021-11-21 11:52:07', '2021-11-21 11:52:07', '1'),
(157, 41, 'RDBMS', '2021-11-21 16:12:28', '2021-11-21 16:12:28', '1'),
(158, 41, 'DBMS', '2021-11-21 16:12:28', '2021-11-21 16:12:28', '1'),
(159, 41, 'SQL', '2021-11-21 16:12:28', '2021-11-21 16:12:28', '1'),
(160, 41, 'MySQL', '2021-11-21 16:12:28', '2021-11-21 16:12:28', '1'),
(161, 41, 'Query', '2021-11-21 16:12:28', '2021-11-21 16:12:28', '1'),
(162, 42, 'PHP Extension and Application Repository', '2021-11-21 16:14:06', '2021-11-21 16:14:06', '1'),
(163, 42, 'PHP Expansion Assessment Report', '2021-11-21 16:14:06', '2021-11-21 16:14:06', '1'),
(164, 42, 'PHP Extension Add-On Repository', '2021-11-21 16:14:06', '2021-11-21 16:14:06', '1'),
(165, 42, 'PHP Expanded and Application Repository', '2021-11-21 16:14:06', '2021-11-21 16:14:06', '1'),
(166, 42, 'PHP Expansion Add-On Repository', '2021-11-21 16:14:06', '2021-11-21 16:14:06', '1'),
(167, 43, 'Very high-level languages', '2021-11-21 16:15:10', '2021-11-21 16:15:10', '1'),
(168, 43, 'High level languages', '2021-11-21 16:15:10', '2021-11-21 16:15:10', '1'),
(169, 43, 'Middle level languages', '2021-11-21 16:15:10', '2021-11-21 16:15:10', '1'),
(170, 43, 'Low level languages', '2021-11-21 16:15:10', '2021-11-21 16:15:10', '1'),
(171, 43, 'Very low-level languages', '2021-11-21 16:15:10', '2021-11-21 16:15:10', '1'),
(172, 44, 'GITHUB', '2021-12-08 19:19:38', '2021-12-08 19:19:38', '1'),
(173, 44, 'GLEEK', '2021-12-08 19:19:38', '2021-12-08 19:19:38', '1'),
(174, 44, 'BOOTSTRAP', '2021-12-08 19:19:38', '2021-12-08 19:19:38', '1'),
(175, 44, 'HTML5Builder', '2021-12-08 19:19:38', '2021-12-08 19:19:38', '1'),
(176, 45, 'Adobe Photoshop', '2021-12-08 19:20:10', '2021-12-08 19:20:10', '1'),
(177, 45, 'Adobe Indesign', '2021-12-08 19:20:10', '2021-12-08 19:20:10', '1'),
(178, 45, 'Inkscape', '2021-12-08 19:20:10', '2021-12-08 19:20:10', '1'),
(179, 45, 'Affinity Designer', '2021-12-08 19:20:10', '2021-12-08 19:20:10', '1'),
(180, 46, 'OnlineJobs.ph', '2021-12-08 19:20:59', '2021-12-08 19:20:59', '1'),
(181, 46, 'Freelancer.com', '2021-12-08 19:20:59', '2021-12-08 19:20:59', '1'),
(182, 47, 'Intel', '2021-12-08 19:21:22', '2021-12-08 19:21:22', '1'),
(183, 47, 'AMD', '2021-12-08 19:21:22', '2021-12-08 19:21:22', '1'),
(184, 48, 'Corsair K100 RGB Optical', '2021-12-08 19:21:55', '2021-12-08 19:21:55', '1'),
(185, 48, 'Razer Cynosa Chroma', '2021-12-08 19:21:55', '2021-12-08 19:21:55', '1'),
(186, 48, 'G.Skill KM360', '2021-12-08 19:21:55', '2021-12-08 19:21:55', '1'),
(187, 48, 'Logitech G915 lightspeed', '2021-12-08 19:21:55', '2021-12-08 19:21:55', '1'),
(188, 49, 'Nvidia  GeForce RTX 3060 Ti', '2021-12-08 19:22:30', '2021-12-08 19:22:30', '1'),
(189, 49, 'Nvidia  GeForce RTX 3080', '2021-12-08 19:22:30', '2021-12-08 19:22:30', '1'),
(190, 49, ' AMD Radeon RX 6600 XT', '2021-12-08 19:22:30', '2021-12-08 19:22:30', '1'),
(191, 49, 'AMD Radeon RX 6700 XT', '2021-12-08 19:22:30', '2021-12-08 19:22:30', '1'),
(192, 50, 'ASUS ROG Phone 5', '2021-12-08 19:23:00', '2021-12-08 19:23:00', '1'),
(193, 50, 'Xiaomi Black Shark 3 Pro', '2021-12-08 19:23:00', '2021-12-08 19:23:00', '1'),
(194, 50, 'Lenovo Legion Phone Duel', '2021-12-08 19:23:00', '2021-12-08 19:23:00', '1'),
(195, 50, 'iPhone 13 Pro Max', '2021-12-08 19:23:00', '2021-12-08 19:23:00', '1'),
(196, 51, 'Converge ICT Solutions', '2021-12-08 19:23:50', '2021-12-08 19:23:50', '1'),
(197, 51, 'PLDT', '2021-12-08 19:23:50', '2021-12-08 19:23:50', '1'),
(198, 51, 'DITO', '2021-12-08 19:23:50', '2021-12-08 19:23:50', '1'),
(199, 51, 'Globe Broadband', '2021-12-08 19:23:50', '2021-12-08 19:23:50', '1'),
(200, 52, ' ETORO', '2021-12-08 19:24:14', '2021-12-08 19:24:14', '1'),
(201, 52, 'FREEDOM Finance', '2021-12-08 19:24:14', '2021-12-08 19:24:14', '1'),
(202, 52, 'DEGIRO', '2021-12-08 19:24:14', '2021-12-08 19:24:14', '1'),
(203, 53, 'HP Omen 15', '2021-12-08 19:24:47', '2021-12-08 19:24:47', '1'),
(204, 53, 'MSI GF65 Thin', '2021-12-08 19:24:47', '2021-12-08 19:24:47', '1'),
(205, 53, 'DELL G15', '2021-12-08 19:24:47', '2021-12-08 19:24:47', '1'),
(206, 53, 'Lenovo Legion 5 Gen 6', '2021-12-08 19:24:47', '2021-12-08 19:24:47', '1');

-- --------------------------------------------------------

--
-- Table structure for table `poll_votes`
--

CREATE TABLE `poll_votes` (
  `id` int(11) NOT NULL,
  `poll_id` int(11) NOT NULL,
  `poll_option_id` int(11) NOT NULL,
  `vote_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `poll_votes`
--

INSERT INTO `poll_votes` (`id`, `poll_id`, `poll_option_id`, `vote_by`) VALUES
(1, 20, 80, 48),
(2, 3, 7, 40),
(3, 4, 11, 40),
(4, 5, 15, 40),
(5, 6, 19, 40),
(6, 7, 24, 40),
(7, 8, 30, 40),
(8, 9, 34, 40),
(9, 10, 38, 40),
(10, 11, 41, 40),
(11, 12, 46, 40),
(12, 20, 77, 40),
(13, 20, 78, 53);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(8) NOT NULL,
  `post_content` text NOT NULL,
  `post_date` datetime NOT NULL,
  `post_topic` int(8) NOT NULL,
  `post_by` int(8) NOT NULL,
  `post_votes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_content`, `post_date`, `post_topic`, `post_by`, `post_votes`) VALUES
(147, 'What visual presentation you prefer to use online? ', '2021-11-07 07:41:57', 1, 40, 3),
(148, 'Canva.com for me!', '2021-11-07 07:42:35', 1, 41, 2),
(152, 'Best tool for hosting server on my local dynamic website?', '2021-11-08 21:19:01', 4, 40, 1),
(153, 'What is the best tool for code editing?', '2021-11-09 14:33:40', 5, 40, 1),
(154, 'VS code for me!', '2021-11-11 13:14:06', 5, 40, 1),
(155, 'What programming languages can you work with?', '2021-11-12 20:30:17', 6, 47, 0),
(156, '. What is the difference between coding and programming?', '2021-11-12 20:31:00', 7, 47, 1),
(157, 'What\'s the most recent programming language that you learned?', '2021-11-12 20:55:09', 8, 48, 0),
(158, 'What is a programming environment?', '2021-11-12 20:56:13', 9, 48, 0),
(159, 'What programming language do you master?', '2021-11-12 21:01:41', 10, 48, 0),
(160, 'What is the best latest programming platform used by developers?', '2021-11-15 10:24:12', 11, 48, 0),
(161, 'What is the best graphic design software to use in learning graphic design?', '2021-11-15 10:29:49', 12, 48, 0),
(162, 'What computer program do people use to write code?', '2021-11-15 20:04:33', 13, 47, 0),
(163, 'Do I have to be good at math to be a developer?', '2021-11-15 20:08:06', 14, 47, 0),
(164, 'Whatâ€™s the difference between a designer and a developer?', '2021-11-15 20:08:31', 15, 47, 0),
(165, 'When a syntax error occurs?', '2021-11-15 20:18:36', 16, 47, 0),
(166, 'Is it hard to debug a program?', '2021-11-15 20:18:52', 17, 47, 0),
(167, 'How do you keep up with current trends and advances in this field?', '2021-11-15 20:22:52', 18, 47, 0),
(168, 'What is the meaning of implementation of a program?', '2021-11-15 20:23:05', 19, 47, 0),
(169, 'How do you get your website online?', '2021-11-15 20:24:16', 20, 47, 0),
(170, 'How do you deal with your current used website?', '2021-11-15 21:04:18', 21, 48, 0),
(171, 'When do logical errors occur?', '2021-11-15 21:05:51', 22, 48, 0),
(172, 'What do you understand by machine code?', '2021-11-15 21:06:32', 23, 48, 0),
(173, 'How do you keep your programming and technical knowledge up to date?', '2021-11-15 21:06:58', 24, 48, 0),
(174, 'How are cross-platform apps different from native apps?', '2021-11-15 21:08:44', 25, 48, 0),
(175, 'What is the best local host server?', '2021-11-15 21:11:50', 26, 49, 0),
(176, 'Did the website render well in your browser?', '2021-11-15 21:12:20', 27, 49, 0),
(177, 'Did you find the content on the website relevant?', '2021-11-15 21:13:11', 28, 49, 0),
(178, 'Did this page help you?', '2021-11-15 21:13:38', 29, 49, 0),
(179, 'Did it take too long to fetch your details on our website?', '2021-11-15 21:14:48', 30, 49, 0),
(180, 'What do you like most about our website?', '2021-11-15 21:15:05', 31, 49, 0),
(181, 'Did you find this page meaningful?', '2021-11-15 21:15:17', 32, 49, 0),
(182, 'How did your experience compare to your expectation?', '2021-11-15 21:15:32', 33, 49, 0),
(183, 'What is a feature you wish our website had?', '2021-11-15 21:15:45', 34, 49, 0),
(184, 'How easy was it to use our website? Did you have any problems?', '2021-11-15 21:15:57', 35, 49, 0),
(185, 'What tool to use in presenting graphical presentations?', '2021-11-16 07:21:54', 36, 40, 0),
(186, 'Best tool for local hosting server on my dynamic website?', '2021-11-16 07:22:24', 37, 40, 0),
(187, 'Best Web server for hosting my project website?', '2021-11-16 07:22:50', 38, 40, 0),
(188, 'Best freelance profession at the present? ', '2021-11-16 07:23:59', 39, 40, 0),
(189, 'What is the current trend among programming languages? ', '2021-11-16 07:24:23', 40, 40, 0),
(190, 'Best extensions inside the VS code platform? ', '2021-11-16 07:24:39', 41, 40, 0),
(191, 'Does google meet more reliable than zoom in terms of online learning? ', '2021-11-16 07:24:58', 42, 40, 1),
(192, 'Does PHP and SQL a safe languages to use on my website? ', '2021-11-16 07:25:19', 43, 40, 0),
(193, 'Whatâ€™s your preferred hardware setup for programming and video editing?', '2021-11-16 07:25:42', 44, 40, 1),
(194, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/qvg0bPmO1p4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n\r\n', '2021-11-20 10:33:51', 44, 40, 1),
(195, 'dfgdgf', '2021-11-21 15:29:34', 45, 40, 0),
(196, 'What are some of the most effective methods for learning programming?', '2021-12-01 19:44:54', 45, 50, 0),
(197, 'Which programming language do you think a newbie should start with?', '2021-12-01 19:47:51', 46, 50, 0),
(198, 'Which programming language is considered to be the easiest for beginners?', '2021-12-01 19:48:41', 47, 50, 0),
(199, 'What do you understand by maintaining and updating a computer program?', '2021-12-01 20:00:39', 48, 50, 0),
(200, 'What are some of the most effective methods for learning programming?', '2021-12-01 20:11:19', 49, 50, 0),
(201, '. What are the various ways of representation of graphical data?', '2021-12-01 20:28:35', 50, 50, 0),
(202, 'What kind of graphical presentation is used in monitoring heartbeats?', '2021-12-01 20:30:10', 51, 50, 1),
(203, 'What are the best Freelancing sites?', '2021-12-01 20:33:58', 52, 50, 0),
(204, 'How do i start working as a freelancer?', '2021-12-01 20:35:14', 53, 50, 0),
(205, 'What should i learn to become a graphics designer?', '2021-12-01 20:38:00', 54, 50, 0),
(206, 'What don\'t people tell you about being a graphic designer?', '2021-12-01 20:40:29', 55, 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `postvotes`
--

CREATE TABLE `postvotes` (
  `voteId` int(11) NOT NULL,
  `votePost` int(11) NOT NULL,
  `voteBy` int(11) NOT NULL,
  `voteDate` date NOT NULL,
  `vote` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postvotes`
--

INSERT INTO `postvotes` (`voteId`, `votePost`, `voteBy`, `voteDate`, `vote`) VALUES
(1, 147, 40, '2021-11-07', 1),
(2, 147, 41, '2021-11-07', 1),
(3, 148, 41, '2021-11-07', 1),
(4, 148, 46, '2021-11-07', 1),
(5, 147, 46, '2021-11-07', 1),
(6, 149, 46, '2021-11-07', 1),
(7, 151, 40, '2021-11-09', 1),
(8, 152, 40, '2021-11-09', 1),
(9, 153, 40, '2021-11-11', 1),
(10, 154, 40, '2022-08-17', 1),
(11, 156, 40, '2021-11-14', 1),
(12, 193, 40, '2021-11-25', 1),
(13, 194, 40, '2021-11-25', 1),
(14, 191, 40, '2021-11-28', 1),
(15, 206, 40, '2021-12-09', 1),
(16, 209, 51, '2022-03-30', 1),
(17, 202, 40, '2022-05-07', 1);

--
-- Triggers `postvotes`
--
DELIMITER $$
CREATE TRIGGER `calc_forum_votes_after_delete` AFTER DELETE ON `postvotes` FOR EACH ROW BEGIN

		update posts
        set posts.post_votes = posts.post_votes - old.vote
        where posts.post_id = old.votePost;	

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `calc_forum_votes_after_insert` AFTER INSERT ON `postvotes` FOR EACH ROW BEGIN
	
	update posts
        set posts.post_votes = posts.post_votes + new.vote
        where posts.post_id = new.votePost;	
		
    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `calc_forum_votes_after_update` AFTER UPDATE ON `postvotes` FOR EACH ROW BEGIN
	
		update posts
        set posts.post_votes = posts.post_votes + (new.vote * 2)
        where posts.post_id = new.votePost;	
		
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(8) NOT NULL,
  `topic_subject` varchar(255) NOT NULL,
  `topic_date` datetime NOT NULL,
  `topic_cat` int(8) NOT NULL,
  `topic_by` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_subject`, `topic_date`, `topic_cat`, `topic_by`) VALUES
(5, 'Code Editing', '2021-11-09 14:33:40', 1, 40),
(6, 'Programming Languages that you can work with.....', '2021-11-12 20:30:17', 1, 47),
(7, 'Difference of coding and programming....', '2021-11-12 20:31:00', 1, 47),
(8, 'Recent Programming Language used....', '2021-11-12 20:55:09', 1, 48),
(9, 'Programming Environment', '2021-11-12 20:56:13', 1, 48),
(10, 'Mastered Programming Language...', '2021-11-12 21:01:41', 1, 48),
(11, 'Best and Latest Programming Platform Used.....', '2021-11-15 10:24:12', 1, 48),
(12, 'Graphic Design', '2021-11-15 10:29:49', 2, 48),
(13, 'Computer Program to write code..', '2021-11-15 20:04:33', 1, 47),
(14, 'Math to be a Developer.', '2021-11-15 20:08:06', 3, 47),
(15, 'Difference Between a Designer and a Developer.', '2021-11-15 20:08:31', 3, 47),
(16, 'Syntax Error Occurences.', '2021-11-15 20:18:36', 4, 47),
(17, 'Debugging a Program.', '2021-11-15 20:18:52', 4, 47),
(18, 'Keeping up with Current Trends and Advancements..', '2021-11-15 20:22:52', 1, 47),
(19, 'Meaning of Program Implementation.', '2021-11-15 20:23:05', 1, 47),
(20, 'Getting a website Online.', '2021-11-15 20:24:16', 5, 47),
(21, 'Dealing with Current Used Website.', '2021-11-15 21:04:18', 5, 48),
(22, 'Logical Errors Occurence.', '2021-11-15 21:05:51', 4, 48),
(23, 'Machine Code..', '2021-11-15 21:06:32', 1, 48),
(24, 'Up-to-date Technical Knowledge...', '2021-11-15 21:06:58', 1, 48),
(25, 'Difference of cross-platform apps from native apps.', '2021-11-15 21:08:44', 6, 48),
(26, 'Best Local Host Server.', '2021-11-15 21:11:50', 1, 49),
(27, 'Website Rendering in Browsers.', '2021-11-15 21:12:20', 5, 49),
(28, 'OnAid Contents relevant value.', '2021-11-15 21:13:11', 5, 49),
(29, 'Aid provided by OnAid.', '2021-11-15 21:13:38', 5, 49),
(30, 'Fetching of your details within the website.', '2021-11-15 21:14:48', 5, 49),
(31, 'Like on the Website!', '2021-11-15 21:15:05', 5, 49),
(32, 'Meaningful value of OnAid Website.', '2021-11-15 21:15:17', 5, 49),
(33, 'OnAid WEbsite Meaningfulness..', '2021-11-15 21:15:32', 6, 49),
(34, 'Additional Features from you...', '2021-11-15 21:15:45', 5, 49),
(35, 'Problems with the website...', '2021-11-15 21:15:57', 5, 49),
(36, 'Graphical Presentations', '2021-11-16 07:21:54', 7, 40),
(37, 'Dynamic Website', '2021-11-16 07:22:24', 5, 40),
(38, 'Web Server', '2021-11-16 07:22:50', 5, 40),
(39, 'Freelance Position', '2021-11-16 07:23:59', 6, 40),
(40, 'Programming languages?', '2021-11-16 07:24:23', 1, 40),
(41, 'VS code platform', '2021-11-16 07:24:39', 6, 40),
(42, 'Online Meeting Platforms', '2021-11-16 07:24:58', 6, 40),
(43, 'PHP and MySQL', '2021-11-16 07:25:19', 5, 40),
(44, 'Hardware Setup', '2021-11-16 07:25:42', 1, 40),
(45, 'Effective methods for programming', '2021-12-01 19:44:54', 1, 50),
(46, 'Programming language', '2021-12-01 19:47:51', 1, 50),
(47, 'Programming language', '2021-12-01 19:48:41', 1, 50),
(48, 'Maintaining and Updating a computer program', '2021-12-01 20:00:39', 9, 50),
(49, 'Maintaining and Updating a computer program', '2021-12-01 20:11:19', 10, 50),
(50, 'Representation of graphical data', '2021-12-01 20:28:35', 2, 50),
(51, 'Graphical presentation', '2021-12-01 20:30:10', 7, 50),
(52, ' Best Freelancing sites', '2021-12-01 20:33:58', 8, 50),
(53, ' Working as a freelancer', '2021-12-01 20:35:14', 8, 50),
(54, 'Graphics designer', '2021-12-01 20:38:00', 2, 50),
(55, 'About being a graphic designer', '2021-12-01 20:40:29', 2, 50),
(56, 'Testing', '2022-03-30 13:04:37', 6, 52);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `userLevel` int(11) NOT NULL DEFAULT 0,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  `gender` char(1) NOT NULL,
  `headline` varchar(500) DEFAULT NULL,
  `bio` varchar(4000) DEFAULT NULL,
  `userImg` varchar(500) DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `userLevel`, `f_name`, `l_name`, `uidUsers`, `emailUsers`, `pwdUsers`, `gender`, `headline`, `bio`, `userImg`) VALUES
(38, 0, '', '', 'testuser', 'testuser@test.com', '$2y$10$80YI6fiwFyOLHhn4CIOG/.xSAmkvG1L12LHGXjlNMdjwxeQCx/GNy', 'm', '', '', '5c20b68db30f81.29224418.jpg'),
(40, 1, 'Gabriel Edrian', 'Alvaro', 'Gabby', 'gabrielalvaro693@gmail.com', '$2y$10$9x.hO88k83A73U.Emxf.AeYyombRMUG8j7xap0knPMOaNTjQ/cWp.', 'm', '', '', '6197b0bfb0f292.02584410.jpg'),
(41, 0, 'Error', 'Checkers', 'TriUse', 'errorcheckers@gmail.com', '$2y$10$8KSoDBEoJ.EukeCd1BXJnOdC5/21REc4WXTpJswVp48OCKU4P6UJW', 'm', 'Information Technology Student', 'Trial User', '6183f5ab9adb30.69528606.jpg'),
(46, 0, 'Batangas', 'University', 'TrialUser', 'gabrielEdrianAlvaro740@gmail.com', '$2y$10$8KSoDBEoJ.EukeCd1BXJnOdC5/21REc4WXTpJswVp48OCKU4P6UJW', 'm', 'Information Technology Student', 'sdgsg', 'default.png'),
(47, 0, 'Lee-Ann Joy', 'Natanauan', 'iamlianne', 'leeannjoy24natanauan@gmail.com', '$2y$10$yTXZ04aHy1ywn44NUJ843e41tm/dCRL9EKh29Wdqa68yoH5me6P1C', 'm', '', '20, PH.', '618a74b6a887e7.83004478.jpg'),
(48, 0, 'Maezie', 'Casabal', 'maezieeeee', 'casabalmaezie@gmail.com', '$2y$10$5Yst3SEwVP6XhRrMD91vVu1BHrTcpWGkCY1SE9krAFRIWSZRJkXo.', 'm', 'Future Data Analyst', '20 | Information Technology Student | Former OJT at Batelec I', 'default.png'),
(49, 0, '', '', 'juju', 'marjori.javier@g.batstate-u.edu.ph', '$2y$10$umR8Ad3NdaV4s74XslLpkO/VhpwipUeiy7Eu.bfFQzAhxTcKEhJh.', 'm', '', '', 'default.png'),
(50, 0, '', '', 'Johnrey', 'manalojohnrey9@gmail.com', '$2y$10$1FJNR30bmKcBD69rZDxbTu7vbp3jfxfD.Zx3.zhyV.Mraum0/oPWm', 'm', '', '', 'default.png'),
(51, 0, 'Marian', 'Guerra', 'marianzg1015', 'marian.guerra@g.batstate-u.edu.ph', '$2y$10$yJn581/GMJeww6ajrtKfIuZ0YtSGhlUjYdazet9.DV268f/eqCJhK', 'f', 'Future Graduate❤️', '', '624451d33535b5.69181310.jpg'),
(52, 0, 'Mariel', 'Guerra', 'MARIEL', 'mariel.guerra@g.batstate-u.edu.ph', '$2y$10$DjTEP57v5l5UizTGvtVbDe872VB/JhxwWOS1DhImSULMyGxORc5Be', 'f', '\"Ad meliora.\"', '... ', '624454436e1c52.21706905.png'),
(53, 0, '', '', 'MarielZG', 'marielzguerra09@gmail.com', '$2y$10$WtKQjhBviFTesVY3sl8Puujhhbolf2SUyMYy3E8mr.8iIE/9dzWaa', 'm', '', '', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `blog_by` (`blog_by`);

--
-- Indexes for table `blogvotes`
--
ALTER TABLE `blogvotes`
  ADD PRIMARY KEY (`voteId`),
  ADD KEY `voteBlog` (`voteBlog`),
  ADD KEY `voteBy` (`voteBy`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name_unique` (`cat_name`);

--
-- Indexes for table `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_one` (`user_one`),
  ADD KEY `user_two` (`user_two`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `events_ibfk_1` (`event_by`);

--
-- Indexes for table `event_info`
--
ALTER TABLE `event_info`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `event` (`event`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_from` (`user_from`),
  ADD KEY `user_to` (`user_to`),
  ADD KEY `conversation_id` (`conversation_id`);

--
-- Indexes for table `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `poll_options`
--
ALTER TABLE `poll_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poll_id` (`poll_id`);

--
-- Indexes for table `poll_votes`
--
ALTER TABLE `poll_votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poll_id` (`poll_id`),
  ADD KEY `poll_option_id` (`poll_option_id`),
  ADD KEY `vote_by` (`vote_by`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post_topic` (`post_topic`),
  ADD KEY `post_by` (`post_by`);

--
-- Indexes for table `postvotes`
--
ALTER TABLE `postvotes`
  ADD PRIMARY KEY (`voteId`),
  ADD KEY `voteBy` (`voteBy`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `topic_cat` (`topic_cat`),
  ADD KEY `topic_by` (`topic_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `blogvotes`
--
ALTER TABLE `blogvotes`
  MODIFY `voteId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `event_info`
--
ALTER TABLE `event_info`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `polls`
--
ALTER TABLE `polls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `poll_options`
--
ALTER TABLE `poll_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT for table `poll_votes`
--
ALTER TABLE `poll_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `postvotes`
--
ALTER TABLE `postvotes`
  MODIFY `voteId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `Blogs-IfDeleteUser` FOREIGN KEY (`blog_by`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE;

--
-- Constraints for table `blogvotes`
--
ALTER TABLE `blogvotes`
  ADD CONSTRAINT `blogvotes_ibfk_2` FOREIGN KEY (`voteBy`) REFERENCES `blogs` (`blog_by`) ON DELETE CASCADE;

--
-- Constraints for table `conversation`
--
ALTER TABLE `conversation`
  ADD CONSTRAINT `conversation_ibfk_1` FOREIGN KEY (`user_one`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `conversation_ibfk_2` FOREIGN KEY (`user_two`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`event_by`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event_info`
--
ALTER TABLE `event_info`
  ADD CONSTRAINT `event_info_ibfk_1` FOREIGN KEY (`event`) REFERENCES `events` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_from`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`user_to`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_ibfk_3` FOREIGN KEY (`conversation_id`) REFERENCES `conversation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `polls`
--
ALTER TABLE `polls`
  ADD CONSTRAINT `Polls-IfDeleteUser` FOREIGN KEY (`created_by`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE;

--
-- Constraints for table `poll_options`
--
ALTER TABLE `poll_options`
  ADD CONSTRAINT `poll_options_ibfk_1` FOREIGN KEY (`poll_id`) REFERENCES `polls` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `poll_votes`
--
ALTER TABLE `poll_votes`
  ADD CONSTRAINT `poll_votes_ibfk_1` FOREIGN KEY (`poll_id`) REFERENCES `polls` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `poll_votes_ibfk_2` FOREIGN KEY (`poll_option_id`) REFERENCES `poll_options` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `poll_votes_ibfk_3` FOREIGN KEY (`vote_by`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `postvotes`
--
ALTER TABLE `postvotes`
  ADD CONSTRAINT `postvotes_ibfk_1` FOREIGN KEY (`voteBy`) REFERENCES `users` (`idUsers`) ON UPDATE CASCADE;

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_2` FOREIGN KEY (`topic_by`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
