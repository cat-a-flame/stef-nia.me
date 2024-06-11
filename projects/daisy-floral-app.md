---
layout: layouts/project.liquid
date: 2023-03-24T11:00:00
pageTitle: 'Case study: Daisy - floral app'
lead: "As part of UX course offered by Google, I created a detailed case study about Daisy, a conceptual flower bouquet ordering app. Through ideation, prototyping, and user-centric design principles, I aimed to create a seamless and delightful flower purchasing experience for potential users."
previewImage: /src/images/projects/daisy.png
socialImage: /src/images/projects/daisy.jpg
achievements:
    - Gained proficiency in UX tools
    - Conducted numerous user interviews
    - Mastered the full UX process
---

It's an incredible opportunity to learn from industry experts and gain new skills in creating intuitive and user-friendly products. In this article, I'm going to share my case study, which demonstrates how I applied the concepts I learned in the course to a real-world project.

## Overview
My design prompt was to create a bouquet preview application for a florist. However, I twisted the prompt a little and decided to create a bouquet ordering app instead. The reason behind this was that my sister is a florist and I was curious to know if she would be interested in shipping flowers, and how many people would use this feature.

### Project background
My sister is a florist and she wants to open her own webshop for her creations. Her target market is Hungary, because she wants to make sure her flowers arrive fresh to the recipients.

### Goal statement
Our bouquet preview app will let users choose the best bouquet for any occasion which will affect anyone who is looking for ordering flowers online by allowing them to easily and quickly choose the right bouquet and order it without a fuss.
We will measure effectiveness by measuring the time spent on browsing and on the checkout page.

### My responsibilities
As part of the learning process, I conducted thorough user research by interviewing participants and run usability tests on the prototype I had developed. Subsequently, I translated my insights and ideas into low-, then into a high-fidelity design, ensuring that the final product met the needs and expectations of the users.

### Duration
The initial three chapters required a three-month investment to complete. Unfortunately, due to time constraints, the remaining chapters are still pending.

<hr/>

## Understanding the user

### User research
I conducted interviews with people whom I recruited from work and Twitter. My hypothesis was that cut flowers and bouquets are not as popular as they used to be. People prefer potted plants because they won't end up in the garbage after one or two weeks.

The requirements for my interview were as follows:
- Digitally mature, meaning they have purchased something online at least once
- Living in Hungary
- A group of people who have bought flowers (not potted plants!) at least once
- A group of people who have never bought bouquets and never intend to

<details class="article-details">
    <summary>Click to view my interview questions</summary>
    <div class="summary">

### Buying cut flowers sometimes or regularly
1. **When was the last time you bought flowers? On what occasion?**
    - What did help your decision?
    - When did you shop last time before this? Is there a system, or just randomly buying?
    - How was the experience? (Was the price okay? Did the flowers look fresh and beautiful?)
2. **Based on what do you choose flowers? (color, durability, size, occasion, price)**
    - Which are the most important details when you are shopping for flowers?
    - Do others' opinions affect your decision?
    - Does it matter what are you buying, or 
    - Does it matter what you buy at all, or is it only the intention that matters?
3. **How long does it take to select the desired bouquet?**
    - Should the colors match? What is the price tag? What kind of flowers is the bouquet made of?
4. **Do you prefer pre-made bouquets or do you like to put them together yourself?**
5. **Do you buy flowers online or in person?**
6. **Why online / in person?**
    - If online, what did you like/dislike about the process?
    - Can you imagine the opposite?
    - If not online, why not? What are your concerns?
    - If online, what platform do you prefer? Desktop or mobile app?
    - If you order online, would you go pick it up in person, or have it delivered to your home?

### Never bought flowers and never intend to
1. **Why not?**
2. **What is your opinion about gifting flowers as a habit?**
   </div>
</details>

### Research findings and personas
My research helped me understand why people buy flower bouquets. I talked to people in their 30s who told me they usually buy bouquets for their elderly relatives because it's a traditional thing to do.
They don't really care about the price because they only buy them as a gift sometimes. If they could choose, they would rather give or get potted plants because they last longer.

On the empathy map and affinity diagram, each color represents a participant.

<details class="article-details">
    <summary>Click to view the empathy map</summary>
    <figure>
        {% image "./images/daisy/empathy_map.jpg", "Empathy map of my research" %}
        <figcaption>Empathy map</figcaption>
    </figure>
</details>

<details class="article-details">
    <summary>Click to view the affinity diagram</summary>
    <figure>
        {% image "./images/daisy/affinity_diagram.jpg", "Affinity diagram of my findings" %}
        <figcaption>Affinity diagram</figcaption>
    </figure>
</details>

The results concluded into two personas:
#### Petra
- Likes gifting bouquets and create a joyfull moment to her family and friends
- She prefers to choose the flowers in person
- She wants to decide which flowers should be in the bouquet, to make it more personal
- Concerned about shopping online, because of the negative reviews, and she is afraid of the bouquet might get damaged

<details class="article-details">
    <summary>Click to view Petra's persona</summary>
        <figure>
            {% image "./images/daisy/persona1.jpg", "Persona 1, Petra" %}
            <figcaption>Persona 1, Petra</figcaption>
        </figure>
</details>

#### Júlia
- Concerned that cut flowers are not so environmentally friendly, and it's also and outdated habit, but her mother loves it
- Doesn't wish to spend much on a bouquet
- She likes ordering online but very few shops deliver outside of Budapest
- She wants to reach a shop on the fastest route

<details class="article-details">
    <summary>Click to view Júlia's persona</summary>
    <figure>
        {% image "./images/daisy/persona2.jpg", "Persona 2, Júlia" %}
        <figcaption>Persona 2, Júlia</figcaption>
    </figure>
</details>

## User Journey
Júlia's objective is to find a web shop that delivers flowers outside of Budapest on a specific date and at a reasonable price. She also wants to ensure that the web shop offers her mother's favorite flowers and that the colors of the bouquet match. Additionally, she wants to receive a notification just before the delivery is made.
<figure>
    {% image "./images/daisy/user_journey_map.png", "Júlia's user journey map" %}
    <figcaption>Júlia's user journey map</figcaption>
</figure>

<hr/>

## Competitive Audit

### Who are your key competitors?
- FLEURT, a flower ordering webshop. They are available only on desktop (has a responsive view, but it has some UX issues). The app is easy to use, I can find my desired category for my bouquet easily. The checkout process is also fast.
- Szirom.hu which is another flower delivery webshop. They offer a variety of bouquets, potted plants and gifts. Their only plus compared to other webshops is that they offer delivery outside Budapest. 

### Competitors' strengths
#### FLEURT:
- Fast delivery of fresh flowers
- Easy ordering
- Language options

#### Szirom.hu:
- Delivering outside Budapest
- Wide range of payment options
- Language options


### Competitors’ weaknesses
#### FLEURT:
- Only shipping in Budapest
- Can't create a custom bouquet

#### Szirom.hu:
- Inaccessible website 
- Very expensive
- Can't create custom bouquets

### Conclusion
Upon learning about the services offered by both direct and indirect competitors, I began to study the ways in which I could effectively address the gaps and alleviate the pain points of users, and determine the optimal approach for implementing these solutions.
Offering customization options to create bouquets of the chosen flowers and displaying the shipping fee in the beginning of the process is one of the options I need to consider.

<hr/>

## Starting the design process

### Low-fidelity mockups

I created a low-fidelity design for the application by making simple wireframes in Figma. I connected the screens and created a clickable prototype which I could test with the users to see if it's easy to use, or if it's anything missing.
<figure>
    {% image "./images/daisy/lowfi.jpg", "Screenshots of the wireframes of the application" %}
    <figcaption>Low-fidelity screens of the application</figcaption>
</figure>

### Usability testing

I chose unmoderated testing to check how my prototype will perform because I was curious about the effectiveness of this method. I provided users with a script and asked them to record their interactions with the prototype. Based on their feedback, they encountered some issues with the app, including the inability to select a shipping date, confusing shipping fee calculations, and unclear text that led to misunderstandings.

#### Research questions
- How long does it take to order a bouquet?
- Can they easily find what they were looking for? (match with an event, fit in their price range)
- How do they feel shopping with an app?

#### Key performance indicators (KPIs)
- Time spent on the ordering process
- Time spent choosing what kind of bouquet they want
- Did they use the filters?
- Number of errors, confusions during each process
- Do they finish the shopping at all?

#### Methodology
- Unmoderated usability test
- Location: remote
- Date: 2022 April 10th
- 5 participants completing predefined tasks such as:
    - Browse the selection
    - Chose a bouquet for a birthday party for maximum 100 USD
    - Place order
    - Rate their experience with the app
- Each session will take 15 minutes, which includes an introduction, a list of tasks, a questionnaire about the experience with the app

#### Participants
- People who buy bouquets online at least twice a year. Do not confuse them with people who buy potted plants, because that is a different target audience. 
- Digitally mature people (they bought something online at least once)
- Living in Hungary because the target market is for Hungary only

<details class="article-details">
    <summary>Click to view the interview script</summary>
    <div class="summary">

**Intro:**
- Before we begin, do I have your consent to record this meeting? I’ll be the only one rewatching this video, and I will delete it by the end of May 2022. I won’t share this with anyone else.
- I want you to know that this isn’t a test, there are no right or wrong answers. I want to see a process of how people buy bouquets online with a mobile app.
- If you have any questions, please, feel free to ask them. 
- Basic questions:
    - Please, introduce yourself. Where do you live, what do you do for a living?
    - When was the last time you ordered a bouquet?
    - What were your needs when you bought that specific bouquet?
    - How was the experience of the process?
- Great! If you are ready, let's move on to the tasks you’ll be working on!

**Background story:**
  - Your aunt’s birthday is coming up and you want to surprise her with a nice bouquet of flowers. She lives in a different city than you do. You want to spend the maximum of 100 USD.

**Prompt 1:**
  - Open the Daisy floral app and try to find the bouquet fitting your needs. Please, share the process with me as you move forward.
    - Follow-up: Was it easy or challenging to find what you were looking for?

**Prompt 2:**
  - After finding your desired bouquet, please place an order.
      - How did you feel about the process? 
      - The details you had to provide was enough or too much?

**Prompt 3:**
  - What was your impression of the Daisy floral app? What did you like and dislike about it the most?

    </div>
</details>

### Test results

1. Several participants were missing the option to choose a delivery date
    - 2 out of 5 participants want to choose a delivery date, because they order the bouquet as a surprise.
    - By setting the delivery date, they can ensure that their gift arrives in time.
    - > "I want to surprise my aunt with a nice bouquet of flowers, but will it arrive in time for her birthday?!"
2. Most of the participants were confused by the shipping fee
    - 3 out of 5 participants didn’t understand how does the shipping fee getting calculated
    - The shipping fee seems deceptive, which ruins the trust with the app
    - > “How does the shipping fee get calculated? I didn't add any address yet!”
3. Some texts weren’t clear, and caused some misunderstandings

### Recommendations
- Provide an option to choose a shipping date. Since flowers are better fresh, plus, our users are buying them as a gifts, this kind of feature would help them a lot to plan ahead.
- Communicate the shipping fee early, probably on the home page.
- Make all texts and labels more clear. Several texts seem misleading, hard to understand.

[TO BE CONTINUED]