<div class="row user_content">
    <div class="medium-6 columns">
        <div><img src="img/kicka.jpg" class="thumbnail ava" alt="eror"></div>
        <a href="#" class="button photo">Change Photo</a>
        <div class="row small-up-4">
            <div class="column">
                <img class="thumbnail" src="http://placehold.it/250x200">
            </div>
            <div class="column">
                <img class="thumbnail" src="http://placehold.it/250x200">
            </div>
            <div class="column">
                <img class="thumbnail" src="http://placehold.it/250x200">
            </div>
            <div class="column">
                <img class="thumbnail" src="http://placehold.it/250x200">
            </div>
        </div>
    </div>
    <div class="medium-6 large-5 columns">
        <h3><div class ="myname"><span><?php echo $currentUser['firstname'];?> </span> <span> <?php echo $currentUser['lastname']; ?></span> </div></h3>
        <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>
        <label>Size
            <select>
                <option value="husker">Small</option>
                <option value="starbuck">Medium</option>
                <option value="hotdog">Large</option>
                <option value="apollo">Yeti</option>
            </select>
        </label>
        <div class="row">
            <div class="small-3 columns">
                <label for="middle-label" class="middle">Quantity</label>
            </div>
            <div class="small-9 columns">
                <input type="text" id="middle-label" placeholder="One fish two fish">
            </div>
        </div>
        <a href="#" class="button large expanded">Send message</a>
        <div class="small secondary expanded button-group">
            <a class="button">Facebook</a>
            <a class="button">Twitter</a>
            <a class="button">Yo</a>
        </div>
    </div>
</div>
