<div class="ui bottom attached segment">
    <div class="ui grid">

        <div class="three column row">
            <div class="left floated column">
                <div class="ui fluid icon input">
                    <input type="text" placeholder="Search...">
                    <i class="search link icon"></i>
                </div>
            </div>
            <div class="right floated column">



                <div class="ui labeled fluid search selection dropdown">
                    <input type="hidden" name="sort">
                    <i class="dropdown icon"></i>
                    <div class="ui label">Sort By</div>
                    <div class="default text">Compatibility</div>
                    <div class="menu">
                        <div class="item" data-value="salary">Salary</div>
                        <div class="item" data-value="salary">Compatibility</div>
                    </div>
                </div>
            </div>

            </div>
        </div>

    <br>
    <p>
        <table class="ui selectable celled definition blue table">
            <thead>
                <tr id="job1">
                    <th></th>
                    <th>Job Title</th>
                    <th>Company</th>
                    <th>Salary</th>
                    <th>Compatibility</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><div class="ui blue horizontal label">1</div></td>
                    <td> <a onclick="$('#example_modal').modal('show');">IT Programmer</a></td>
                    <td>Accenture Philippines</td>
                    <td>15,000-30,000</td>
                    <td class="positive">95%</td>
                </tr>

                <tr>
                    <td><div class="ui blue horizontal label">2</div></td>
                    <td>Computer Specialist</td>
                    <td>Hewlett Packard Enterprise</td>
                    <td>19,000-24,000</td>
                    <td class="warning">30%</td>
                </tr>
            </tbody>
        </table>


    </p>
</div>

<div class="ui modal" id="example_modal">
            <div class="header" id="center">IT Programmer</div>
            <div class="content">
                <div class="ui stackable two column grid">
                    <div class="twelve wide column">
                        <div class="ui styled fluid accordion">
                            <div class="active title">
                                <i class="dropdown icon"></i>
                                Job description
                            </div>

                            <div class="active content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet erat in nulla congue auctor vel eget lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus luctus auctor rutrum. Nunc ultrices arcu id diam aliquam laoreet. Curabitur a leo nec odio sodales efficitur sed in erat. Duis eu quam in tellus condimentum vestibulum ut at diam. Maecenas gravida dolor vehicula elit vulputate, eget scelerisque urna consectetur. Morbi condimentum, turpis non dapibus sodales, libero lacus scelerisque nunc, eu mattis metus ipsum sed velit. Quisque ornare ut augue eget ornare.

                                    Fusce placerat, enim non rhoncus fermentum, ligula odio varius turpis, at commodo ligula urna in ante. Aenean tincidunt tristique purus, sit amet placerat libero pretium sit amet. Quisque ut libero nec turpis efficitur dictum. Donec euismod facilisis lacus, eget posuere nulla finibus in. Proin lobortis dolor dui, quis commodo magna ultrices nec. Ut tincidunt, lacus vitae pharetra sodales, magna justo sollicitudin turpis, semper consectetur ante lacus sed lorem. Phasellus eget velit a massa aliquam commodo. In malesuada euismod velit, pellentesque congue magna. Nulla ante ipsum, ultrices ut elementum eu, vulputate et turpis. Aliquam id quam eget nisi sagittis molestie. Fusce quis suscipit ipsum, in tincidunt est. Nam scelerisque nunc vel fringilla dignissim. Praesent ipsum neque, cursus vitae diam ac, congue tincidunt orci. Suspendisse tristique diam et ultricies tincidunt. Quisque gravida dolor ac justo volutpat, lacinia congue enim elementum.

                                    Vivamus dictum vitae tortor vel tristique. Vestibulum blandit enim quis tincidunt molestie. Nunc venenatis augue facilisis, feugiat quam vitae, dictum nisl. Proin sed aliquam leo, sit amet mollis mauris. Ut porttitor, leo sed feugiat placerat, erat turpis feugiat mauris, sit amet interdum urna leo vitae est. Etiam ut imperdiet nisi. Maecenas vehicula, ligula sit amet congue imperdiet, massa justo laoreet ligula, quis gravida turpis ipsum a justo. Sed eget ipsum vitae ligula dictum porta. Nam lobortis diam quis turpis gravida, id tristique ex pellentesque. Sed aliquam lectus turpis, vitae ultrices felis efficitur vitae. Donec lorem risus, congue vitae tortor quis, pulvinar convallis nunc. Suspendisse sollicitudin ac massa eget facilisis. Nunc in ullamcorper purus. Etiam molestie id erat vitae iaculis. Fusce sit amet tincidunt odio.</p>
                                                                
                            </div>

                            <div class="title">
                                <i class="dropdown icon"></i>
                                Company Description
                            </div>

                            <div class="content">
                                <p>A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="four wide column">
                        <div class="ui list">
                            <div class="item">
                                <i class="marker icon"></i>
                                
                                <div class="content">
                                    <a class="header">Location</a>
                                    <div class="description">MSE Building, Ayala Avenue 1200, Makati City</div>
                                </div>
                            </div>
                            <br>
                            <div class="item">
                                <i class="Caret Right icon"></i>
                                
                                <div class="content">
                                    <a class="header">Salary</a>
                                    <div class="description">P15,000 - P17,000</div>
                                </div>
                            </div>
                            <br>
                            <div class="item">
                                <i class="Caret Right icon"></i>
                                
                                <div class="content">
                                    <a class="header">Course Preferred</a>
                                    <div class="description">Computer Science, Information Technology, Information Systems</div>
                                </div>
                            </div>
                            <br>
                            <div class="item">
                                <i class="Caret Right icon"></i>
                                
                                <div class="content">
                                    <a class="header">Closing Date</a>
                                    <div class="description">February 17, 2017</div>
                                </div>
                            </div>
                            <br>
                            <div class="item">
                                <i class="Caret Right icon"></i>
                                
                                <div class="content">
                                    <a class="header">Company:</a>
                                    <div class="description">Accenture Philippines</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br> <br>
                
                
                
            </div>
            
            <div class="actions" id="center">
                <div class="ui buttons">
                    <button class="ui button">Back</button>
                    <div class="or"></div>
                    <button class="ui positive button">Send Resume</button>
                </div>
            </div>
            
        </div>
        
        <script>$('.ui.dropdown').dropdown();</script>