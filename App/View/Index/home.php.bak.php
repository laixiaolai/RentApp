<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fuck_me ?></title>
    <script src="./jquery.min.js"></script>
    <script src="./vue.min.js"></script>
    <script src="./vue-resource.min.js"></script>
    <script src="./vue-router.min.js"></script>
</head>
<body>
    
    <div class="article" id="app">
        <ul v-for="items in tree">
            <li>classify: "{{ items.classify}}"<br /> id: {{ items.id}}<br /> image: "{{ items.image}}"<br /> keyword: "{{ items.keyword}}"<br /> module: "{{ items.module}}"<br /> test: {{ items.test}} </li>
        </ul>

        <h1>
            <?php echo $article['title'] ?></h1>
        <div class="content">
            <?php echo $article['id'] ?></div>


    <input type="hidden" value="<?php echo date("Y-m-d H:i:s"); ?>" v-model="Datetime">
    <input type="hidden" value="745f855c-215e-4934-9ef0-bfae5a64bfba" v-model="Token">
    </div>
    <ul class="fuckme">
        <li>Fuck Me !</li>
        <li> <?php echo $fuck_me ?></li>
    </ul>

</body>

<script>

    $(function(){
       
        var vm = new Vue({
            el: '#app', //绑定id盒子
            data: {  //初始化内容值
                addUser: {
                    'article_sort_id' : 0
                },
                Datetime: '',
                Token: '',
                tree: []
            },
            methods: {  //自定义方法集合

                

                fetchUser: function () { //列表渲染
                    console.log(this.Datetime);
                    console.log(this.Token);
                    var headers = {"Content-Type":"application/json","X-Api-Key":"web-app","Datetime":this.Datetime,"X-Auth-Token":this.Token}
                    this.$http.get("http://test.trip55.com:9002/admin/recommend", {
                        headers: headers
                    })
                    .then((response) => {
                        // this.result = response.json()
                        // console.log(2222)
                        // console.log(response.json())
                        this.$set('tree',response.json());
                    }).catch(this.requestError)



                }
               
            },
            ready: function() { //初始化执行的方法
                this.fetchUser();
            }
        })

    });
</script>
</html>