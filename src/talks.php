<?php

$app->talk_kinds = array(
    'workshop' => "Workshop",
    'talk' => "Talk",
    'keynote' => "Keynote",
    'other' => "",
    'party' => "Party",
);

$app->rooms = array(
    'workshop_1' => "Studio 1",
    'workshop_2' => "Studio 2",
    'workshop_3' => "Labo",
    'workshop_4' => "Mini-Labo",
    
    'talk' => "Salle 2",
    '' => "Talk",
      
);

$app->talks = array(
    'anna_dahlstrom' => array(
        'slug' => 'anna_dahlstrom',
        'speaker' => $app->speakers['anna_dahlstrom'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['workshop'],
        'title' => "Device Agnostic Design ",
        'teaser' => "how to get your content to go anywhere.",
        'description' => "There was a time when we did pretty page designs and when those designs were pretty much what we saw in our desktop browsers. With the introduction and rise of smartphones, tablets, phablets - as well as a bigger variety in larger and smaller screens - there isn’t one view of our designs anymore. Instead, what we design need to be able to adapt so that it’s displayed in a way that is suitable for the device that is being used. <br>With responsive design we’ve learnt the basics of how to adapt content, interactions and layouts so that it works across devices. But with further developments in technology and screens, our content is going to go anywhere and we need to move away from designing for specific devices. For us as UX designers this means means letting content rather than devices guide layouts, but also increasingly moving away from designing and wireframing pages and instead focusing on the modules that those pages are made up of. <br>The device agnostic design approach places a bigger weight on our shoulders in terms of ensuring that what we design will in fact work across devices, irrespectively of what device that is used. As a result we need to be clever in how we approach design, development and specification to ensure we spend our resources appropriately, but also that we build something that can adapt to as many different platforms and screen sizes as possible. <br />In this workshop you’ll get a thorough understanding of and hands on experience with:<ul><li>why we should do device agnostic design</li><li>the basics of modular and device agnostic design</li><li>what it means to approach a project in a modular way</li><li>how to go about doing it </li><li>module libraries and how to use them using content as the basis for responsive design breakpoints</li></ul>",
        'location' => $app->rooms['workshop_1'],   
        'event_url' => "",
    ),
    'brigit_geiberger_and_peter_boersma_talk' => array(
        'slug' => 'brigit_geiberger_and_peter_boersma_talk',
        'speaker' => $app->speakers['brigit_geiberger_and_peter_boersma'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['talk'],
        'title' => "UX sells, but not by itself",
        'teaser' => "A deep exploration on the mechanism of selling UX.",
        'description' => "Designing a user experience is only half the job. The other half is responding to a brief (whether internal or external) by defining the scope and selling the project. In many organizations, our work is defined by project managers and sold by sales people. But shouldn't we be responsible for defining our work? And shouldn't we be as good at selling it as the sales people?<br/>In this presentation, we want to share our thoughts about - and experiences with - selling UX work. We want to help you:<ul><li>Identify who you are selling to and how to flex your selling style</li><li>Pick the right content and structure for your proposal</li><li>Apply the same tricks that salespeople use to be successful</li></ul>",
        'location' => $app->rooms['talk'],   
        'event_url' => "",
    ),
    'brigit_geiberger_and_peter_boersma_workshop' => array(
        'slug' => 'brigit_geiberger_and_peter_boersma_workshop',
        'speaker' => $app->speakers['brigit_geiberger_and_peter_boersma'],
        'position' => 1,
        'when' => "Friday",
        'kind' => $app->talk_kinds['workshop'],
        'title' => "Do The Right Thing",
        'teaser' => "Learn how to make your design accepted by building a better understanding of the design process and the people you will interact with.",
        'description' => "<p>People in the field of User Experience are taught that having empathy for the end-user is the holy grail. We believe that, by studying the way your fellow project team members work, what their needs are, and what & how they deliver, you can develop another type of empathy, one that may prove to be more important for business success and results in a delightful work environment. </p><p>In the first half of this workshop, we want to walk you through the design process and the people you will meet on the way, mostly from outside of your design team's environment. We will show how your skills and contributions allow you to influence their work and, indirectly, the resulting end-user experience.<br/>Peter will explain that documenting your organization's design process allows you to sell your work better, to train new team members easier, to maintain a consistent vocabulary for your team, and to measure and improve your team’s effectiveness.<br/>Activities in this part will include sketching organizational charts and design process diagrams to identify the relevant people to influence, as well as specifying input and deliverables that will help your organization to identify, design and build successful user experiences. The end-result is a plan to improve your process.</p><p>In the second half, we will focus on how to successfully communicate your contributions to different stakeholders during the design process.<br/>Birgit will explain the concept of communication styles, and show you how to identify your own style and that of co-workers. She will teach you how to adapt your own style to others to ensure you will be heard during a project, and help you to overcome conflicts. <br/> Activities in this part will include discussing a typical work-related communication problem; finding a solution and gaining a common ground; a self evaluation exercise; applying the communication styles on the earlier introduced problem and finding more effective ways to solve this (and other) challenges.</p><p>We believe that by paying attention to these two aspects, process and people, you will develop that other kind of empathy, the kind that makes you a better participant in the design process, helps you communicate your designs better, while enjoying your work more. It makes you do the right thing.</p><h4>Who is this workshop for?</h4><p>User Experience designers, of course, as well as people in the roles around the design process: from user researchers, via project managers and front-end developers, to account managers and heads of design departments.</br>The focus of this workshop is on learning how to determine the best design process for your team and the importance of communication that is needed to successfully work within a team environment.</p><h4>What will you learn?</h4><ul><li> Understand the roles involved in the design process</li><li>Document your work process</li><li>Define your team's deliverables</li><li>Communicate your process</li><li>Communication style theories</li><li>Understand your own communication style and that of co-workers</li><li>Methods to flex your style to others</li><li>Become aware of - and overcome - communication pain-points in the design process</li></ul><h4>Prior knowledge from participants:</h4><p>It helps if participants have thought about their design process and the way they communicate before but, more importantly, they should have some experience designing in different teams and for different internal or external clients.</p>",    
        'location' => $app->rooms['workshop_1'],   
        'event_url' => "",
    ),
    'janina_woods' => array(
        'slug' => 'janina_woods',
        'speaker' => $app->speakers['janina_woods'],
        'position' => 0,
        'when' => "Saturday",
        'kind' => $app->talk_kinds['talk'],
        'title' => "The Virtual Reality Experience",
        'teaser' => "An interactive overview of current state of the virtual reality interactions.",
        'description' => "In this talk, Janina reflects on the latest evolution of the world of Virtual Reality by showcasing her current concrete work and on how those new devices imply new paradigms of UI and UX - in games as well as in a broader spectrum of fields. <br />She will then describe a near-future world where our current interface with the world will be replaced by an virtual Augmented Reality one and explore usages of Virtual reality as featured in marketing and game contexts.",
        'location' => $app->rooms['talk'],   
        'event_url' => "",
    ),
    'fabian_hemmert' => array(
        'slug' => 'fabian_hemmert',
        'speaker' => $app->speakers['fabian_hemmert'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['talk'],
        'title' => "Bodily Experiences of the Digital",
        'teaser' => "How our body treats digital information like physical stuff, information consumption like food consumption, and technical devices like social, living beings.",
        'description' => "For many people, the digital world is still hard to grasp. It leaves us cognitively overwhelmed, and bodily unchallenged. <br/>  In this session Fabian will develop how our experience of the digital world is metaphorically physical and impacts on our body. <br/>  He will demonstrate  ways to make us physically embrace the digital world through industrial and interaction design - by giving life to objects based on their digital presence. <br/>  Finally, he will raise the fundamental question of whether we want devices that are behaving like humans, or - worse - humans that are becoming robots.",
        'location' => $app->rooms['talk'],   
        'event_url' => "",
    ),
    'nicolas_nova' => array(
        'slug' => 'nicolas_nova',
        'speaker' => $app->speakers['nicolas_nova'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['workshop'],
        'title' => "Design Ethnography and User-Centered Design : The missing link",
        'teaser' => "How to make your user research actionable.",
        'description' => "One of the premises of User-Centered Design is that documenting people’s practices through field work (observation, interviews, etc.) is relevant to inspire and frame design or innovation.   <br />  However - more often than not - this premise corresponds to a form of wishful thinking, as opposed to an actual approach used by designers. This problem is quite prevalent when it comes to explaining how to transfer results from field research to design purposes. This phase is indeed very briefly dealt with, or presented very quickly without a thorough explanation of the different sets of solution possibilities. This workshop focuses on how to use results and collected data from field research in order to turn them as a design output.  <br />  The attendee will go through several activities to understand the different kind of insights that exist in field research and how they can be turned into design decisions for each steps of a project.",
        'location' => $app->rooms['workshop_4'],   
        'event_url' => "",
    ),
    'oliver_reichenstein' => array(
        'slug' => 'oliver_reichenstein',
        'speaker' => $app->speakers['oliver_reichenstein'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['talk'],
        'title' => "Information ↔ Entropy",
        'teaser' => "Will information technology affect our minds the same way the environment was affected by our analogue technology?",
        'description' => "Designers hold a key position in dealing with ever increasing data pollution. We are mostly focussed on speeding things up, on making sharing easier, faster, more accessible. But speed, usability, accessibility are not the main issue anymore. The main issues are not technological, they are structural, processual. <br/> What we lack is clarity, correctness, depth, time. Are there counter-techniques we can employ to turn data into information, information into knowledge, knowledge into wisdom?",
        'location' => $app->rooms['talk'],   
        'event_url' => "",
    ),
    'adrian_zumbrunnen' => array(
        'slug' => 'adrian_zumbrunnen',
        'speaker' => $app->speakers['adrian_zumbrunnen'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['talk'],
        'title' => "On distraction-free reading experiences",
        'teaser' => "Creating focussed reading experiences in a world full of distractions.",
        'description' => "<p>Distractions have always been a natural constituent of our lives. But with the rise of technology and all the digital noise, it has become harder than ever to keep focussing on a specific task.</p><p>It’s out job as designers to bring back clarity to the digital canvas by providing reading experiences that put readers first.</p>",
        'location' => $app->rooms['talk'],   
        'event_url' => "",
    ),
    'romira_kavcic' => array(
        'slug' => 'romira_kavcic',
        'speaker' => $app->speakers['romira_kavcic'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['workshop'],
        'title' => "From Scratch to Visual Design",
        'teaser' => "Understand and master the UX process.",
        'description' => "<p>In this workshop we will go through the design process including user research, wireframing, prototyping, and visual design. You will learn the types of prototypes, tools, and best practices for mobile and desktop. We’ll cover best practices and standard design methodologies for creating engaging user-flows. Tips and trick included.</p><h4>What will you learn?</h4><ul><li>Low-fidelity, high-fidelity prototyping</li><li>How to choose your prototyping tools</li><li>Why prototyping can help you</li><li>How to get feedback fast</li><li>Techniques, best practices, benefits</li></ul><h4>You will need</h4><ul><li>Smartphone (iPhone or Android) </li><li>Computer</li></ul>",
        'location' => $app->rooms['workshop_3'],   
        'event_url' => "",
    ),
    'indi_young_talk' => array(
        'slug' => 'indi_young_talk',
        'speaker' => $app->speakers['indi_young'],
        'position' => 0,
        'when' => "Thursday",
        'kind' => $app->talk_kinds['talk'],
        'title' => "Practical Empathy",
        'teaser' => "Get into the depth of the empathy and its use.",
        'description' => "<p>There are many kinds of empathy: emotional empathy, mirror neurons, empathic concern, personal distress, self empathy, and cognitive empathy. There are also many uses for empathy: to help/relieve, to persuade, to change someone's mind, to better support a person, etc. When you say you are using empathy in your work, you probably mean something different than another person does. So. If you have a better understanding of all these definitions, you'll be better able to reach for the right tool at the right moment. Moreover, you'll be able to understand the differences between what decision-makers need in order to face risk. You'll be able to articulate the role empathy plays in the post-industrial creative age.</p>",
        'location' => $app->rooms['talk'],   
        'event_url' => "",
    ),
    'indi_young_workshop' => array(
        'slug' => 'indi_young_workshop',
        'speaker' => $app->speakers['indi_young'],
        'position' => 0,
        'when' => "Thursday",
        'kind' => $app->talk_kinds['workshop'],
        'title' => "Empathy Is Not An Interview",
        'teaser' => "What it takes to run a user resarch that makes sense.",
        'description' => "<p>User research, whether evaluative or generative, involves talking at length with people to find out what they're thinking. Traditionally, we've been taught to go into an interview with a standard list of questions, so we can compare answers across different people--but this is the wrong approach when doing qualitative, inductive work. You can't apply a method developed for natural sciences when trying to understand the breadth of thinking styles and reasons behind how different people behave. </p><p>This workshop will help you get comfortable with \"questionless\" research, where only the scope-of-research guides what you explore with each individual.  You will also learn how to help the participant get comfortable and trust you, so that together you can explore his personal reasoning and guiding principles, and so that he will honestly explain his reactions and behaviors.</p><p>During the workshop, you'll have a chance to try out the material we are covering. There will be a couple of listening exercises, where you learn to empty your mind and dig deeper into the reasoning going on in another person's mind. You'll have a chance to summarize some of what you heard from the other person, and as a group we'll look for patterns. Finally, if there's time, we'll choose one of the patterns and brainstorm some ways we can support that kind of thinking, using not only an app, but also interactions, writing, process, or policy.<h4>What will you learn?</h4><ul><li>Empathy is a frame of mind that you drop into and out of repeatedly.</li><li>The key is to find out the point of what the person is doing.</li><li>You aren’t there to be \"the expert.\" Instead, help the Speaker understand that he’s the one with all the answers. It’s his mind, after all.</li><li>Be an expert at curiosity about other people—open curiosity, without analysis or assumptions.</li></ul>",
        'location' => $app->rooms['workshop_2'],   
        'event_url' => "",
    ),
    'ryan_rumsey' => array(
        'slug' => 'ryan_rumsey',
        'speaker' => $app->speakers['ryan_rumsey'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['workshop'],
        'title' => "Let's get selfish. ",
        'teaser' => "Assessment as a means to drive your UX career.",
        'description' => "<p>To delight users, the role of a designer or design manager is not only to understand user needs, but also to understand individual or team goals. Where do you want to be at the end of a project? Where does your team want to be? How will you know if you got there? These questions are at the heart of self-assessment.</p><p>If you’ve ever designed for clients, led user research, assigned design tasks to you team, etc. – and used what you discovered about your methods to refine future methods – you’ve engaged in assessment. Assessment is simply the process of collecting information about design tasks and performance to improve future design capabilities. As a model of performance, self-assessment is effective in that it can articulate the links between leading inputs (human and physical), processes, and outcomes, then provide focus on the importance of managing these components to achieve an individual or teams strategic priorities.</p><p>In this new workshop, we'll focus on practical strategies for utilizing existing design efforts to better inform your goals as a designer or design manager. Using the concept of self and team evaluation, you can leverage client work to improve your ability to drive your UX career. Feedback from this assessment can be used to help determine how much you’re improving (great for case studies and acquiring new clients!) as well as better understanding what you might want to improve as a designer or design manager.</p><h4>What will you learn?</h4><ul><li>Understand the importance of integrating assessment and evaluation with future instruction.</li><li>Understand the importance of establishing clear and explained criteria for assessment and evaluation, to succeed on them without making such preparation the centerpiece of future design.</li><li>Utilize existing processes and techniques for clients and users, such as research, design, and reporting, for self-assessment and evaluation.</li><li>Develop ways to include designers in their own assessment via self reflection, self-assessment, and the development of rubrics.</li></ul>",
        'location' => $app->rooms['workshop_3'],   
        'event_url' => "",
    ),
    'giles_colborne_talk' => array(
        'slug' => 'giles_colborne_talk',
        'speaker' => $app->speakers['giles_colborne'],
        'position' => 0,
        'when' => "Thursday",
        'kind' => $app->talk_kinds['talk'],
        'title' => "Delight and innovation",
        'teaser' => "Delight and innovation are powerful words. Discover what hides behind it.",
        'description' => "<p>Delight and innovation are powerful words. If your design is delightful or innovative then it stands apart from everything else. People see it as different, special, unique. For the past ten years, I've been collecting stories of what delights people. I've found that what is delightful or innovative is rarely what designers or their clients expect. This talk will reset what you think of as 'delight' and give you some practical tips for creating delightful, innovative designs.</p>",
        'location' => $app->rooms['talk'],   
        'event_url' => "",
    ),
    'simon_raess' => array(
        'slug' => 'simon_raess',
        'speaker' => $app->speakers['simon_raess'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['talk'],
        'title' => "Mind the gap",
        'teaser' => "The story of three brilliant designers and what we can learn from them.",
        'description' => "<p>I’m intrigued by the enormous gap in quality we’re facing in UX design. The range of user experiences covers everything from extremely frustrating to utterly delightful.</p><p>Of course, it’s never a designer’s intention to create something bad. Nonetheless, even the worst interfaces were studiously created by somebody. And at the same time, there are designers out there who repeatedly create brilliant interfaces in a relaxed, even casual manner.</p><p>In my talk I’d like to discuss the nature of this gap and how to close it. To do this, I will first share the stories of some truly influential designers in our field. We will then explore the defining factors of their success and try to learn something from them.</p><p>Spoiler alert: It takes a lot more than just talent and hard work…</p>",
        'location' => $app->rooms['talk'],   
        'event_url' => "",
    ),
    'giles_colborne_workshop' => array(
        'slug' => 'giles_colborne_workshop',
        'speaker' => $app->speakers['giles_colborne'],
        'position' => 0,
        'when' => "Thursday",
        'kind' => $app->talk_kinds['workshop'],
        'title' => "Simplicity / Efficiency",
        'teaser' => "Why was it worth one company spending $350,000 to shave a second off an interaction? Should you do the same?",
        'description' => "<p>Designing for the web has made interaction designers lazy. Before the web, our customers were pinstriped businesses or high-pressure environments like aircraft cockpits, so we had to work to make interactions efficient.</p><p>The web changed the rules.</p><p>With the web, interfaces had to be easy for the millions of new users who were coming online. Meeting that challenge undoubtedly made interfaces better. But our designs no longer had to be efficient — people just had to think they were efficient.</p><p>That is no longer good enough. With the rise of mobile, we need to create interfaces that people can glance at, use with a flick of the wrist or check a dozen times an hour.</p><p>This workshop will help you rediscover some of the techniques for designing interfaces that are highly efficient, as well as sharing plenty of new examples of modern mobile design.</p> <h5>What will you learn?</h5><ul><li>When efficiency matters and who it helps</li><li>How to explain the importance of efficiency to your stakeholders</li><li>How to balance the need for efficiency and obviousness</li><li>Ways of measuring and validating efficiency</li><li>How to recognise which design directions are likely to be more efficient</li><li>Tips and techniques to make touch interfaces more efficient to use</li><li>Creating a roadmap for efficiency and measuring return on investment</li></ul>  <p>There'll be plenty of exercises, discussion and a chance to try techniques our for yourself.</p> ",
        'location' => $app->rooms['workshop_2'],   
        'event_url' => "",
    ),
    'opening' => array(
        'slug' => 'opening',
        'position' => 0,
        'when' => "Wednesday",
        'kind' => $app->talk_kinds['party'],
        'title' => "Opening Drinks",
        'teaser' => "<p>If you are already in town, join us to share some drinks. Come over and meet the speakers as well as your fellow attendees.</p><p>You can get your badge there between 18:00 to 19:45 if you want to avoid the morning rush.</p>",
        'description' => "",
        'sponsor' => "",
        'speaker' => "",   
        'location' => "La suite",
        'event_url' => "/venue#opening",
        'photo' => "/assets/img/venue_lasuite.jpg",          
    ),
    'lunch' => array(
        'slug' => 'lunch',
        'position' => 0,
        'when' => "everytime",
        'kind' => $app->talk_kinds['other'],
        'title' => "Lunch",
        'teaser' => "",
        'description' => "",
        'sponsor' => "",
        'speaker' => "",
        'location' => "Le foyer",   
        'event_url' => "",
    ),
    'closing' => array(
        'slug' => 'closing',
        'position' => 0,
        'when' => "Wednesday",
        'kind' => $app->talk_kinds['party'],
        'title' => "Closing party",
        'teaser' => "",
        'description' => "",
        'sponsor' => $app->sponsors_major['liip'],
        'speaker' => "",   
        'location' => "Bourg Plage",
        'event_url' => "/venue#closing",  
        'photo' => "",       
    ),
    'breakfast' => array(
        'slug' => 'breakfast',
        'position' => 0,
        'when' => "everytime",
        'kind' => $app->talk_kinds['other'],
        'title' => "Breakfast ",
        'teaser' => "" ,
        'description' => "",
        'sponsor' => "",
        'speaker' => "",
        'location' => "Le Foyer",   
        'event_url' => "",
    ),
    'openingremarks' => array(
        'slug' => 'openingremarks',
        'position' => 0,
        'when' => "everytime",
        'kind' => $app->talk_kinds['other'],
        'title' => "Opening Remarks ",
        'teaser' => "" ,
        'description' => "",
        'sponsor' => "",
        'speaker' => "",
        'location' => "Salle 2",   
        'event_url' => "",
    ),
    'closingremarks' => array(
        'slug' => 'closingremarks',
        'position' => 0,
        'when' => "everytime",
        'kind' => $app->talk_kinds['other'],
        'title' => "Closing Remarks",
        'teaser' => "" ,
        'description' => "",
        'sponsor' => "",
        'speaker' => "",
        'location' => "Salle 2",   
        'event_url' => "",
    ),
    'morningbreak' => array(
        'slug' => 'morningbreak',
        'position' => 0,
        'when' => "everytime",
        'kind' => $app->talk_kinds['other'],
        'title' => "Coffee break",
        'teaser' => "" ,
        'description' => "",
        'sponsor' => "",
        'speaker' => "",
        'location' => "Le Foyer",   
        'event_url' => "",
    ),
    'afternoonbreak' => array(
        'slug' => 'afternoonbreak',
        'position' => 0,
        'when' => "everytime",
        'kind' => $app->talk_kinds['other'],
        'title' => "Afternoon break",
        'teaser' => "" ,
        'description' => "",
        'sponsor' => "",
        'speaker' => "",
        'location' => "Le Foyer",   
        'event_url' => "",
    ),
    'thursdaydrinks' => array(
        'slug' => 'thursdaydrinks',
        'position' => 0,
        'when' => "everytime",
        'kind' => $app->talk_kinds['other'],
        'title' => "Chill & Drinks",
        'teaser' => "Enjoy a few drinks at the venue with your fellow conference attendees. This place is ours until 7pm." ,
        'description' => "",
        'sponsor' => "",
        'speaker' => "",
        'location' => "Le Foyer",   
        'event_url' => "",
    ),
    'thursdaydance' => array(
        'slug' => 'thursdaydance',
        'position' => 0,
        'when' => "everytime",
        'kind' => $app->talk_kinds['party'],
        'title' => "Twerk",
        'teaser' => "Twerk. A modern dance perfomance inspired by electronic music will take place in l'Arsenic. A limited amount of tickets are available for the attendees - Register upon arrival." ,
        'description' => "",
        'sponsor' => "",
        'speaker' => "",
        'location' => "Salle 1",
        'event_url' => "/venue#twerk",
        'photo' => "/assets/img/venue_dance.jpg",   
    ),
    'bonny' => array(
        'slug' => 'bonny',
        'speaker' => $app->speakers['bonny'],
        'position' => 0,
        'when' => "Friday",
        'kind' => $app->talk_kinds['workshop'],
        'title' => "UX Comics: Storytelling & Empathy in action",
        'teaser' => "Learn how to make UX comics from scratch.",
        'description' => "<p>One of the biggest challenges we face as user experience professionals is that of communication. Communication between ourselves, our team members, clients and end users. Our work is focussed on meeting and exceeding user needs, however this is often clouded by communication failures between ourselves and stakeholders. How many times have you known that a team has not read a report you’ve written? Or have not read the annotations you’ve carefully added to wireframes or prototypes?</p><p>UX comics get read. And they get shared amongst stakeholder teams. They get pinned to walls, emailed, saved and most importantly, they get talked about. Comics delight and surprise people and this makes them a very powerful tool.</p><p>UX Comics are a great way to communicate ideas, events and processes with clients, team members and end users - so they can be used throughout the user experience workflow. They are quick and simple to produce once you know how and this practical, hands-on workshop will give you the methods and tools you need to start making your own UX comics.</p><p>I will explain why comics are such a powerful communication method, and share examples of how I use comics in my work, and how other people are using comics.</p><p>You do not need to be a skilled artist to take part, all you need is a willingness to pick up a pencil and have a go. By the end of the session you will have produced your very first UX comic, as well as a set of characters and reference materials you can use to continue making comics in the future.</p> <h5>What will you learn?</h5><ul><li>The art and science of making UX comics</li><li>How to draw people and emotions confidently</li><li>How to structure stories around research data.</li><li>A brief history of comics</li><li>See real-life UX comics and how they are used today</li></ul>",
        'location' => $app->rooms['workshop_4'],
        'event_url' => "",
    ),
);