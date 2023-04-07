<?php
require('Persistence.php');
$comment_post_ID = 1;
$db = new Persistence();
$comments = $db->get_comments($comment_post_ID);
$has_comments = (count($comments) > 0);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>STEPS & STAIRS</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link href="style.css" rel="stylesheet" />
  <script src="script.js" defer></script>
</head>

<body style="background-color: #5F5B6B;">

  <header class="outline">
      <h1>STEPS & STAIRS</h1>
      <h3>pretentious blog by Kelly</h3>
      <h5>Spring Abroad in Hong Kong</h5>
  </header>

  <nav>
    <ul>
      <li>
        <a href="index.html">Home</a>
      </li>
      <li>
        <a href="posts.html">Posts</a>
      </li>
      <li>
        <a href="lessons.html">Lessons Learned</a>
      </li>
      <li>
        <a href="memes.html">Memes</a>
      </li>
    </ul>
  </nav>

  <h1 class="blogTitle"> Reservoir, Ramen, Rugby, Rock Pools! </h1>
  <p class="blogBody">
     This is a big post about all the fun activities I did in March - it was a pretty fun month and I'm glad I was able to make this fun title out the things I did.  
  </p>

  <p class="blogBody">
  I did not do any travelling outside the country during Spring Break so I made sure I explored places around the island. I ended up visiting the Tai Tam Reservoir - a beautiful historical site with a nice walking path.
  </p>
  <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8A9kCPXPYMnt1svKlGJJ2fHYNcZnacT5GskRciEVN6LN_RMpSeSruilCoj5PVTfFPlBqFyqemIoZs14zC_ErU01Nnba_emgJd4SbEfcB-lEyxpcIXQ=w2400"/>
  <p style="color:gray; text-align:center"><i></i></p>

  <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8DBBPgsnPaOQA431UI6r99kzqpRG-lQGP0d5L13_dUwnTbtmil_l2dt-fF1zjA0dYR7OSr6VKcIW4RLBcazkheLagQjWaKD2ni5Mzo7qhEEF-31RM4=w2400"/>
  <p style="color:gray; text-align:center"><i></i></p>
  
  <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8DMOMBSgQAj1CeBnEGDC1dDXSLOflz78mw0EQDDKXXHCZFWwE3nZfDGBl2hf5AeD9i8w4jCcmG-x3jy7J8E9VawH_rC8g1WfVqpJ_6wIg15PtIEYwA=w2400"/>
  <p style="color:gray; text-align:center"><i></i></p>
  
  <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8DFico6exXOWT19nERM68-fzIt8k5DJxeCzMipkcB6fC9MAVTFm1u9NB_f8RtDFxO0RBrWOT5uk5g2GNYqfA65mzYEgZbxb-Azqv4ue8orLdwN4e-0=w2400"/>
  <p style="color:gray; text-align:center"><i> have never seen a cooler person in my life, except maybe Bruno Mars - but it's not clear who the winner is. </i></p>
  
  <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8Cuv5XY6rA2lPzhVEGpeNzVGIuu9FND79aVh1DUakgE8g-K-nzT-9kBlMmpCutOXbQx7IaPn0OBfNaR3WeE4EasVEvIZ3wF29bHeDJLTK7RyhNI64o=w2400"/>
  <p style="color:gray; text-align:center"><i></i></p>
  
  <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8B-sC6RGcHiJDQKuvK8hssetqvmFrYohJCNO2dbPfTgcBJmcBs_KIVdL4okSj2EqtLrFrf2ttQopdOofIqJ0_OWWwpHA94F8a4xV0FZwODJ1UYYg5Y=w2400"/>
  <p style="color:gray; text-align:center"><i></i></p>
  
  <p class="blogBody"> I have also had some tasty Ramen at a small place near the HKU campus - Sakura house. I honestly think it is my favorite place to eat here. The two queens who run this place have my heart.
  </p>
 
   <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8ASPqqgQyZ0lVfFty6ODml-Vi3gOEnKPfbYnWNhEkiO7ZCR6SgCNM0QrwSbXJEsGZbpJkmP7u4TI_gSsSeSHzdvLY7n3fA1CKBt88dX7sGjsQJTx_0=w2400"/>
  <p style="color:gray; text-align:center"><i></i></p>

  <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8C_J2lwTSk7nMXnXSPwZvFSPH1b-2SmGNdU_hUOFq_mPmtVEtRDzU9h5oz4TriWa6VY4-CP7zu9xjkj8xKhYWcyjVosulitXuBTl0yBoVdPEgVPYH4=w2400"/>
  <p style="color:gray; text-align:center"><i></i></p>
  
  <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8DY44pULu6MZ0qFeYO91cnrENJaZS84hHUT6uv_iScN7z78luj-y7kApae05xwp_ReMM_3IVaiNlZJQKY7E9UpXXOovFTf8Ug2Qs7YlgPvisardxMo=w2400"/>
  <p style="color:gray; text-align:center"><i>I'm going to miss this place so much. My heart will never be complete without a bowl of Ramen from Sakura at least once a week.</i></p>
  
  
  <p class="blogBody">
    This month I played in 2 rugby tournaments. I am no star player of the 7s rugby field, but the tournaments were still a fun chance to play in a game setting. I also went to some of the Friday games of the Hong Kong 7s! That was a very fun night - it was raining and made the games very slippery (the ball looked like a bar of soap) but all the games were very fun to wacth. Also... more egg pizza!! 
  </p>
  
  <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8DUlfr-aVc_n3FZ7y08tNRZ2eoWcjdtDzTrkUGhJ05MF9SA4AorOxY3o7PgQ8HcVDAF-9Toy8f_RvdTLlH-PP_9mcNfrx_vpJMOOMjQve00kFZ4Xp8=w2400"/>
  <p style="color:gray; text-align:center"><i></i></p>

  <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8AzGJTSfqCar12-8-nb8XcXQTrZ-E5JYIhCd3nPCNImE8HLMtqBKoB_Ui0nlKP0uBwnG-Bvn1EoU6V_qlfji7YgledVuaiDVdKYqmEoEPIyanQyf00=w2400"/>
  <p style="color:gray; text-align:center"><i>USA [women's] USA [women's]</i></p>
  
  <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8Dij-AsMkEwJPLH2InZmS-GCGKJi9f-lmPt32g0vmRFqBnOsDVmp5tXLBkg4Y20yfnf3bdxPnGz8ERx3ps-bm5zgh-pkUGx2W0KScExpvdZEkxr1RA=w2400"/>
  <p style="color:gray; text-align:center"><i>Opening Ceremony</i></p>
  
  <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8BM6vGgcmEhQ9wiqZ3NgADQeYqYtk_uQDsR8IhPe929Pcw5utTiJ99b1f3ZdXTCNrPg7OgpjbZxmxS_Q1KK7Kog03CNHWtRloGkpmksyuGiLyb0Axo=w2400"/>
  <p style="color:gray; text-align:center"><i>EGG PIZZA</i></p>
  
  <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8BqSbqn-VF47yGyB-2oPQyMroPnzfTtEoRy-g9h8vnaRc2mDXeyb__xVSy6SfdvEYYYMR-Ehj7xfwbE9cwbXoX6vOGnXXL8J0M6Xeo2ho8Y4lYTs7A=w2400"/>
  <p style="color:gray; text-align:center"><i>Maybe if I stand still they won't see me. I don't have very cool action photos.</i></p>
  
  <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8DKVHZOmkGfPso81o5m1NkokDmksaQCoLZWCe5JsklnFKcDCQbPVl5ov__Q6XRHugd1FmzsQio5_PwKvUjgSDzdNXhWMawT5nuKd13-PAfRjH89WVE=w2400"/>
  <p style="color:gray; text-align:center"><i>I said it once I'll say it again. Women's rugby has the best people you will ever find.</i></p>
  
   <p class="blogBody">
      Finally - we made a trip to some rock pools. The day was filled with a lot of ups and downs. We missed the bus we needed to take to get to the path that lead to the rock pools, so we ended up on a 3hr hike to get to that path.  I enjoyed it, that's the kind of hiking I have been wanting to do. It was VERY muddy though, but also very beautiful.  We finished the hike, but had to walk a different 30 min. (paved) path to get to the rock pools - that was also a nice walk, it lead through a village and past a beach. 
  </p>
  
    <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8DdTZORfMtwIiJEGlKAzyEbXXwuojfaCevrLgMHdbyt1yosNqfsaFjG-Jr6h2VESaP4QMFmrcz2hCFmiFmalPiAJIsS-AaqYCHrR96ACJHGMMEJP-Y=w2400"/>
  <p style="color:gray; text-align:center"><i>bucket. hat.</i></p>

  <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8D7xq66C4H9mbKEK2wVtlq0Yo7Dq9ShdD_VZJNsP_SPh1EBNqgaNF18q-d78Hg1qubpPbhr5BOsUgRjvv0qzlnoRND4DVEgjsmb8er-gD4nYeVYr0o=w2400"/>
  <p style="color:gray; text-align:center"><i></i></p>
  
  <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8D9YO_ctILb8kHQmrRmudZBdmwQo6P6usbNPtLOCAdp6xzH5uWaX9dBiKtvV4jxGEEJbds4GsP2tFmfSAm1-UQ4in6B9_8TOkreIdm_MXJU5L97M94=w2400"/>
  <p style="color:gray; text-align:center"><i></i></p>
  
  <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8ABLBRVwxMmFe8DZuWcLaALt6sMQe8_2nnFgbLH6gitHMwcMWLP6PVECGhM8r4LcB2N201aQfbXfsuTMcc3Qf5U571gF4aSB7p8MTalD9c8X-l5dQ8=w2400"/>
  <p style="color:gray; text-align:center"><i></i></p>
  
  <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8Do5_rOWv213rEvBjr1O5KGDv60GOwYhiBZffT-edp6LgBU4Q4mOBBusoqzaly1f0VwGEgug2OtyMHYgeNDggJI2hd-uqlaoHTEXYH_uQmk-LsskPk=w2400"/>
  <p style="color:gray; text-align:center"><i></i></p>
  
  <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8CMoK7FTwlSEOy2iZ4J62fggvW3zdU1tS-2B5au9Pc7q0JigSr_e8ZSuaoc_xOy0QTWHxA4yc2D5LD3OMVDrtBaxauQzPtfJ9NmkYnlgNw7pOdRCGc=w2400"/>
  <p style="color:gray; text-align:center"><i></i></p>  
  
  <p class="blogBody">
    The rock pools were very fun. We made sure to stay safe - don't worry - nobody was jumping into the rock pool, but we did swim. The water was so clear and refreshing, I have never been in anything quite like it. I got to clean all the mud off of me from the hike. It was a long journey to get there - but it was definitely worth it. We had to almost run in order to catch the last bus back - that was kinda scary but we luckily made it with 3 minutes to spare. It was a great day, and did over 30,000 steps by the end of it. The rest of the night was kinda downhill but at the end of the day I went to bed and slept like a rock.
  </p>
  
  <img class="blog_pic" src="https://lh3.googleusercontent.com/pw/AMWts8Ak6dpMFxWYHLiMsMW7Z2MwNen_ccuv0v-5QwOYwFJb_smZSwG4bCyRQdwzyQ8WkOwkuNBGxnvzsXYdoIt_Tl6m2PVE_EkBQe4ukZy3sK4uJkWvG3A=w2400"/>
  <p style="color:gray; text-align:center"><i>No rocks or people harmed in the swimming of these pools.</i></p>  
  
  <img class="blog_pic" src=""/>
  <p style="color:gray; text-align:center"><i></i></p>  
  
  <img class="blog_pic" src=""/>
  <p style="color:gray; text-align:center"><i></i></p>  
  
  <br>
  <br>
  
<section id="comments" class="body">
	  
	  <header>
			<h2>Comments</h2>
		</header>

    <ol id="posts-list" class="hfeed<?php echo($has_comments?' has-comments':''); ?>">
      <li class="no-comments">Be the first to add a comment.</li>
      <?php
        foreach ($comments as &$comment) {
          ?>
          <li><article id="comment_<?php echo($comment['id']); ?>" class="hentry">	
    				<footer class="post-info">
    					<abbr class="published" title="<?php echo($comment['date']); ?>">
    						<?php echo( date('d F Y', strtotime($comment['date']) ) ); ?>
    					</abbr>

    					<address class="vcard author">
    						By <a class="url fn" href="#"><?php echo($comment['comment_author']); ?></a>
    					</address>
    				</footer>

    				<div class="entry-content">
    					<p><?php echo($comment['comment']); ?></p>
    				</div>
    			</article></li>
          <?php
        }
      ?>
		</ol>
		
		<div id="respond">

      <h3>Leave a Comment</h3>

      <form action="post_comment.php" method="post" id="commentform">

        <label for="comment_author" class="required">Your name</label>
        <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">
        
        <label for="email" class="required">Your email</label>
        <input type="email" name="email" id="email" value="" tabindex="2" required="required">

        <label for="comment" class="required">Your message</label>
        <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>

        <input type="hidden" name="comment_post_ID" value="<?php echo($comment_post_ID); ?>" id="comment_post_ID" />
        <input name="submit" type="submit" value="Submit comment" />
        
      </form>
      
    </div>
			
</section>

  
  <br>
  <br>
  
  <img class="blog_pic" src=""/>
  <p style="color:gray; text-align:center"><i>Song of the week: </i></p>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

  </html>
