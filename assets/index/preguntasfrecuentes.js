function showTab(tab_id, tab_content) {
                                                var x = document.getElementsByClassName("tabcontent");
                                                var i;
                                                for (i = 0; i < x.length; i++) {
                                                    x[i].style.display = 'none';
                                                }
                                                document.getElementById(tab_content).style.display = 'block';
                                                var x = document.getElementsByClassName("mnu");
                                                var i;
                                                for (i = 0; i < x.length; i++) {
                                                    x[i].className = 'mnu';
                                                }
                                                document.getElementById(tab_id).className = 'mnu active';
                                            }
                                            var URLhash = window.location.hash;
                                            if (URLhash == "#inhumaciones") {
                                                showTab('tb_1', 'tab_1');
                                            }
                                            if (URLhash == "#cremacion") {
                                                showTab('tb_2', 'tab_2');
                                            }
                                            if (URLhash == "#protocolo") {
                                                showTab('tb_3', 'tab_3');
                                            }


