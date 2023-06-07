<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Resep;

class ResepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Resep::create([
            'nama' => 'Vegetarian Lasagne', 
            'foto' => 'vegetarian_lasagna.jpg',
            'deskripsi' => 'Make our easy vegetarian lasagne using just a handful of ingredients. You can use ready-made tomato sauce and white sauce, or batch cook the sauces and freeze them',
            'person' => '4 Person',
            'time' => '40 Minutes',
            'ingredients' => '3 red peppers, cut into large chunks
            2 aubergines, cut into ½ cm thick slices
            8 tbsp olive oil, plus extra for the dish
            300g lasagne sheets
            125g mozzarella
            1 tbsp olive oil
            2 onions, finely chopped
            2 garlic cloves, sliced
            1 carrot, roughly chopped2 tbsp tomato purée
            200ml white wine',
            'steps' => 'To make the tomato sauce, heat the olive oil in a saucepan. Add the onions, garlic and carrot. Cook for 5-7 mins over a medium heat until softened. Turn up the heat a little and stir in the tomato purée. 
            Cook for 1 min, pour in the white wine, then cook for 5 mins until this has reduced by two-thirds. Pour over the chopped tomatoes and add the basil leaves. 
            Bring to the boil then simmer for 20 mins. Leave to cool then whizz in a food processor. Will keep, cooled, in the fridge for up to three days or frozen for three months.
            To make the white sauce, melt the butter in a saucepan, stir in the plain flour, then cook for 2 mins. Slowly whisk in the milk, then bring to the boil, stirring. Turn down the heat, then cook until the sauce starts to thicken and coats the back of a wooden spoon. Will keep, cooled, in the fridge for up to three days or frozen for three months.Heat the oven to 200C/180C fan/gas 6. Lightly oil two large baking trays and add the peppers and aubergines. 
            Toss with the olive oil, season well, then roast for 25 mins until lightly browned.Reduce the oven to 180C/160C fan/gas 
            4. Lightly oil a 30 x 20cm ovenproof dish. Arrange a layer of the vegetables on the bottom, then pour over a third of the tomato sauce. Top with a layer of lasagne sheets, then drizzle over a quarter of the white sauce. Repeat until you have three layers of pasta.Spoon the remaining white sauce over the pasta, making sure the whole surface is covered, then scatter over the mozzarella and cherry tomatoes. Bake for 45 mins until bubbling and golden.'
        ]);

        Resep::create([
            'nama' => 'Salmon Risotto', 
            'foto' => 'salmon_risotto.jpg',
            'deskripsi' => 'Creamy rice and tender salmon make a comforting dinner. Stir through lemon juice and parmesan before serving this easy, delicious meal that\'s full of omega 3',
            'person' => '3 Person',
            'time' => '30 Minutes',
            'ingredients' => '1 l chicken stock4 salmon fillets
            2 tbsp olive oil
            50g butter
            1 onion, very finely diced1 garlic clove, crushed or finely grated
            250g arborio rice
            300ml white wine
            100g frozen peas
            ½ lemon, juiced and zested
            50g parmesan, grated, plus extra to serve',
            'steps' => 'Bring the chicken stock to a simmer in a saucepan over a medium heat, add the salmon fillets and poach for 6 mins or until just cooked. Remove from the pan, leaving the stock behind, and set aside to cool for 2-3 mins before removing the skin. 
            Keep on a low heat or remove and leave the lid on to keep the stock as warm as possible. Heat the oil and half the butter in a large frying pan over a medium-low heat and, once the butter has melted, scatter in the onion and cook for 10-12 mins until softened but not golden. 
            Add the garlic, stir and cook for 1 min before stirring in the rice and cooking for 2 mins until well coated in the oil. Pour in the wine, turn up the heat to medium, and cook for 4-5 mins until evaporated. 
            Keep the pan on the heat and pour in about a quarter of the reserved chicken stock. Stirring often until the stock has been absorbed by the rice, about 4-5 mins. 
            Repeat three more times, adding the next batch once the previous one has been absorbed. With the final batch, add the peas and flake in the cooked salmon fillets. Season with lots of freshly ground black pepper and cook for 3-4 mins until the rice is tender and the peas and salmon are heated through. If the rice needs a little more cooking or the stock absorbs too quickly, add a splash more hot water.'
        ]);

        Resep::create([
            'nama' => 'Chicken Curry', 
            'foto' => 'chicken_curry.jpg',
            'deskripsi' => 'This easy staple chicken curry is a fantastic recipe for family dinners. It\'s made with just a handful of ingredients and is enriched with creamy yogurt for family dinners.',
            'person' => '5 Person',
            'time' => '40 Minutes',
            'ingredients' => '2 tbsp sunflower oil
            1 onion, thinly sliced
            2 garlic cloves, crushedthumb-sized piece of ginger, grated
            6 chicken thighs, boneless and skinless
            3 tbsp medium spice paste (tikka works well)
            400g can chopped tomatoes
            100g Greek yogurt
            1 small bunch of coriander, leaves chopped
            50g ground almonds',
            'steps' => 'Heat the oil in a flameproof casserole dish or large frying pan over a medium heat. 
            Add the onion and a generous pinch of salt and fry for 8-10 mins, or until the onion has turned golden brown and sticky. 
            Add the garlic and ginger, cooking for a further minute. 
            Chop the chicken into chunky 3cm pieces, add to the pan and fry for 5 mins before stirring through the spice paste and tomatoes, along with 250ml water. 
            Bring to the boil, lower to a simmer and cook on a gentle heat uncovered for 25-30 mins or until rich and slightly reduced. 
            Stir though the yogurt, coriander and ground almonds, season and serve with warm naan or fluffy basmati rice.'
        ]);

        Resep::create([
            'nama' => 'Butter Chicken', 
            'foto' => 'butter_chicken.jpg',
            'deskripsi' => 'Fancy a healthy version of your favourite Friday night curry? Try our easy butter chicken – the meat can be marinaded the day before so you can get ahead on your prep',
            'person' => '6 Person',
            'time' => '40 Minutes',
            'ingredients' => '1/2-1 lemon, (to taste) juiced
            2 tsp ground cumin
            2 tsp paprika
            1-2 tsp hot chilli powder
            200g natural yogurt
            2 tbsp vegetable oil1 large onion, chopped
            3 garlic cloves, crushed
            1 green chilli, deseeded and finely chopped (optional)
            thumb-sized piece ginger, grated
            1 tsp garam masala
            2 tsp ground fenugreek',
            'steps' => 'In a medium bowl, mix all the marinade ingredients with some seasoning. 
            Chop the chicken into bite-sized pieces and toss with the marinade. 
            Cover and chill in the fridge for 1 hr or overnight.
            In a large, heavy saucepan, heat the oil. Add the onion, garlic, green chilli, ginger and some seasoning. 
            Fry on a medium heat for 10 mins or until soft.Add the spices with the tomato purée, cook for a further 2 mins until fragrant, then add the stock and marinated chicken. Cook for 15 mins, then add any remaining marinade left in the bowl. 
            Simmer for 5 mins, then sprinkle with the toasted almonds. Serve with rice, naan bread, chutney, coriander and lime wedges, if you like.'
        ]);

        Resep::create([
            'nama' => 'Chocolate Biscuits', 
            'foto' => 'chocolate_biscuits.jpg',
            'deskripsi' => 'Try this basic recipe for fail-safe biscuits every time. Make a batch of chocolate chip cookies, or adapt it to include nuts, fruit or your favourite sweets hocolate chip cookies',
            'person' => '4 Person',
            'time' => '35 Minutes',
            'ingredients' => '250g butter, softened
            350g light soft brown sugar
            2 large eggs
            350g self-raising flour
            100g cocoa powder
            200g chocolate chips or chopped chocolate chunks
            400g for optional dipping (choose your favourite type)',
            'steps' => 'Beat the butter and sugar together with an optional pinch of sea salt in a bowl until light and fluffy, then beat in the eggs one at a time. 
            Sift over the flour and cocoa powder and beat into the butter mix, then fold through the chocolate chips. 
            The mix can be made up to 2 days ahead and chilled or frozen for a month, or used straight away.To bake, heat oven to 190C/170C fan/gas 5. 
            If the mix is at room temperature, place evenly spaced spoonfuls on parchment-lined baking sheets, allowing 2 tbsp for each cookie. 
            If the mix is fridge cold, you can roll it into 40g balls before baking. The balls can be frozen and the biscuits baked from frozen, but they’ll need a few minutes more. Bake for 12-15 mins until spread out and crusty around the outside. 
            Leave to cool slightly and enjoy warm, or leave to cool completely and eat cold. The biscuits will keep in a tin for three days.As an optional extra, the biscuits can be dipped in chocolate. To do this, melt your chosen type of chocolate in a bowl over a pan of simmering water or in the microwave. 
            Leave to cool a little, then dip half of each biscuit in the chocolate and leave them on parchment-lined trays somewhere cool to set. Again, the dipped biscuits will keep for up to three days in a tin or lidded plastic container.'
        ]);

        Resep::create([
            'nama' => 'Honey Chicken', 
            'foto' => 'chicken_honey.jpg',
            'deskripsi' => 'Rustle up this family-friendly honey chicken, flavoured with garlic, soy sauce, lemon and ginger, in 30 minutes. Serve with rice and broccoli for a filling meal flavoured with garlic',
            'person' => '4 Person',
            'time' => '30 Minutes',
            'ingredients' => '4 chicken breasts (about 600g), trimmed and cut into 2-3cm cubes
            2 tbsp plain flour
            40g piece of ginger, peeled and finely grated
            4 garlic cloves, finely chopped
            6 tbsp soy sauce
            5 tbsp honey
            1 onion, thinly sliced
            ½-1 lemon, juiced
            4 garlic cloves, finely chopped
            1 tbsp sunflower, vegetable, rice bran or rapeseed oil',
            'steps' => 'Tip the chicken into a bowl, sprinkle over the flour and some seasoning and toss until the chicken is evenly coated. ip in the honey sauce and stir-fry for 10 mins, or until the chicken is cooked through and the sauce has reduced enough to coat the back of a spoon. 
            Taste for seasoning and squeeze over the remaining lemon juice.
            Combine the ginger, garlic, soy, honey and half the lemon juice in a bowl. 
            Heat the oil in a large frying pan or wok over a high heat and fry the chicken for 3-4 mins until lightly golden. 
            Tip in the honey sauce and stir-fry for 10 mins, or until the chicken is cooked through and the sauce has reduced enough to coat the back of a spoon. 
            Taste for seasoning and squeeze over the remaining lemon juice, if needed, then serve with rice and steamed broccoli, if you like.'
        ]);

        Resep::create([
            'nama' => 'Beef Bowl', 
            'foto' => 'beef_bowl.jpg',
            'deskripsi' => 'Get all five of your five-a-day in this Mexican-inspired spicy beef taco bowl. Full of textures and flavours, it can be partly prepped ahead owl of rice topped with beef and onion',
            'person' => '4 Person',
            'time' => '30 Minutes',
            'ingredients' => '1 tsp olive oil
            1 large red pepper, deseeded and finely diced
            500g 5% fat beef mince
            1 tbsp chipotle paste
            1 tsp ground cumin
            1 tsp ground coriander
            200g can chopped tomatoes
            2 tbsp tomato purée
            20g coriander, stalks chopped, leaves reserved
            2 red onions, thinly sliced
            2 limes, juiced
            2 x 250g pouches cooked microwave wholemeal basmati rice
            400g can black beans, drained
            200g cherry tomatoes, halved
            198g can sweetcorn (saltand sugar-free)
            2 small avocados, sliced',
            'steps' => 'Heat the oil in a non-stick pan and fry the pepper for 5 mins until starting to soften. Add the beef, chipotle paste and spices, and cook, stirring, to break down the meat for a few minutes. Stir in the tomatoes, tomato purée, coriander stalks, 150ml water and some seasoning, then cover. 
            Leave to simmer for 20 mins to cook through and reduce a little. Will keep chilled for up to three days, or frozen for up to three months. Defrost thoroughly and reheat until piping hot.
            Meanwhile, toss the onions in the lime juice in a bowl and set aside to pickle.When the mince is ready, warm the rice following pack instructions.
            Tip the cooked rice into four serving bowls, then add the beef and top each one with a quarter of the black beans, cherry tomatoes and corn, half an avocado (fan out the slices, if you like), and the coriander leaves.'
        ]);

        Resep::create([
            'nama' => 'Ramen Noodle', 
            'foto' => 'ramen.jpg',
            'deskripsi' => 'Use chicken, noodles, spinach, sweetcorn and eggs to make this moreish Japanese chicken, noodles noodle soup, for when you crave something comforting yet light and wholesome.',
            'person' => '4 Person',
            'time' => '40 Minutes',
            'ingredients' => '700ml chicken stock
            3 garlic cloves, halved
            4 tbsp soy sauce, plus extra to season
            1 tsp Worcestershire sauce
            thumb-sized piece of ginger, sliced
            ½ tsp Chinese five spicepinch of chilli powder
            1 tsp white sugar (optional)
            375g ramen noodles
            garlic cloves, halved
            400g sliced cooked pork or chicken breast
            2 tsp sesame oil',
            'steps' => 'Mix 700ml chicken stock, 3 halved garlic cloves, 4 tbsp soy sauce, 1 tsp Worcestershire sauce, a sliced thumb-sized piece of ginger, ½ tsp Chinese five spice, pinch of chilli powder and 300ml water in a stockpot or large saucepan, bring to the boil, then reduce the heat and simmer for 5 mins.
            Taste the stock – add 1 tsp white sugar or a little more soy sauce to make it sweeter or saltier to your liking.
            Cook 375g ramen noodles following the pack instructions, then drain and set aside.
            Slice 400g cooked pork or chicken, fry in 2 tsp sesame oil until just starting to brown, then set aside.
            Divide the noodles between four bowls. 
            Top each with a quarter of the meat, 25g spinach, 1 tbsp sweetcorn and two boiled egg halves each.'
        ]);

        Resep::create([
            'nama' => 'Fish Soup', 
            'foto' => 'fish_soup.jpg',
            'deskripsi' => 'Looking for a recipe to bring back the warmth and stir the soul? Perfect with some crusty bread, this simple healthy fish soup will soon become a favourite you can also make.',
            'person' => '4 Person',
            'time' => '40 Minutes',
            'ingredients' => '1 tbsp olive oil
            2 garlic cloves, crushed
            1 tsp ground cumin
            ½ tsp paprika
            200g can chopped tomato
            1 red pepper, deseeded, cut into chunks
            450g white fish fillets, cut into chunks
            handful coriander, roughly chopped
            1 lemon, cut into wedges',
            'steps' => 'Put the coriander seeds and galangal or ginger in a saucepan. 
            Pour in the stock, bring to the boil, then simmer gently for 5 mins. 
            Leave to stand for 10 mins.Meanwhile, cook the noodles following pack instructions. 
            Drain and keep warm. Return stock to the boil. Add the fish sauce, chillies and garlic, reduce the heat and simmer for 2 mins. 
            Add the prawns and salmon, return to a simmer and cook gently for about 5 mins until both are firm and cooked. 
            Add the spring onions, herbs and lime juice, to taste.Divide the noodles between soup bowls. 
            Using a slotted spoon, lift out the prawns and fish, and place on the noodles. 
            Season the hot stock, pour into the bowls and serve with Spring rolls on the side.'
        ]);

    }
}
