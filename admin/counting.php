        <?php
        //////////////////////////////////////////////////////////////////
        // red //
        $rdvcbc = 0;
        $rdvcgc = 0;
        $rvcbc = 0;
        $rvcgc = 0;
        $rdcbc = 0;
        $rdcgc = 0;
        $rcbc = 0;
        $rcgc = 0;
        $rdvcb = 'null';
        $rdvcg = 'null';
        $rvcb = 'null';
        $rvcg = 'null';
        $rdcb = 'null';
        $rdcg = 'null';
        $rcb = 'null';
        $rcg = 'null';
        //yellow//
        $ydvcbc = 0;
        $ydvcgc = 0;
        $yvcbc = 0;
        $yvcgc = 0;
        $ydcbc = 0;
        $ydcgc = 0;
        $ycbc = 0;
        $ycgc = 0;
        $ydvcb = 'null';
        $ydvcg = 'null';
        $yvcb = 'null';
        $yvcg = 'null';
        $ydcb = 'null';
        $ydcg = 'null';
        $ycb = 'null';
        $ycg = 'null';
        //green//
        $gdvcbc = 0;
        $gdvcgc = 0;
        $gvcbc = 0;
        $gvcgc = 0;
        $gdcbc = 0;
        $gdcgc = 0;
        $gcbc = 0;
        $gcgc = 0;
        $gdvcb = 'null';
        $gdvcg = 'null';
        $gvcb = 'null';
        $gvcg = 'null';
        $gdcb = 'null';
        $gdcg = 'null';
        $gcb = 'null';
        $gcg = 'null';
        //blue//
        $bdvcbc = 0;
        $bdvcgc = 0;
        $bvcbc = 0;
        $bvcgc = 0;
        $bdcbc = 0;
        $bdcgc = 0;
        $bcbc = 0;
        $bcgc = 0;
        $bdvcb = 'null';
        $bdvcg = 'null';
        $bvcb = 'null';
        $bvcg = 'null';
        $bdcb = 'null';
        $bdcg = 'null';
        $bcb = 'null';
        $bcg = 'null';
        //head council//
        $prcbc = 0;
        $prcgc = 0;
        $ccbc = 0;
        $ccgc = 0;
        $scbc = 0;
        $scgc = 0;
        $dhbc = 0;
        $dhgc = 0;
        $hbc = 0;
        $hgc = 0;
        $prcb = 'null';
        $prcg = 'null';
        $ccb = 'null';
        $ccg = 'null';
        $scb = 'null';
        $scg = 'null';
        $dhb = 'null';
        $dhg = 'null';
        $hb = 'null';
        $hg = 'null';

        ///////////////////////////////////////////////////////////////////
        foreach ($mysqli->query('SELECT COUNT(grno) FROM users') as $row);
        $totalvr = $row['COUNT(grno)'];
        foreach ($mysqli->query("SELECT COUNT(grno) FROM users WHERE headc = 'true' ") as $row1);
        $totalvrh = $row1['COUNT(grno)'];
        foreach ($mysqli->query('SELECT COUNT(img) FROM candidates') as $row2);
        $totalcr = $row2['COUNT(img)'];
        foreach ($mysqli->query("SELECT COUNT(img) FROM candidates WHERE house = 'head council' " ) as $row02);
        $totalcrhc = $row02['COUNT(img)'];
        foreach ($mysqli->query("SELECT COUNT(img) FROM candidates WHERE house != 'head council' " ) as $row002);
        $totalcrh = $row002['COUNT(img)'];
        foreach ($mysqli->query('SELECT COUNT(grno) FROM voted') as $row3);
        $totalvoted = $row3['COUNT(grno)'];
        foreach ($mysqli->query('SELECT COUNT(grno) FROM votedh') as $row4);
        $totalvotedh = $row4['COUNT(grno)'];
        foreach ($mysqli->query('SELECT COUNT(grno) FROM votesy') as $row5);
        $totalvotesy = $row5['COUNT(grno)'];
        foreach ($mysqli->query('SELECT COUNT(grno) FROM votesr') as $row6);
        $totalvotesr = $row6['COUNT(grno)'];
        foreach ($mysqli->query('SELECT COUNT(grno) FROM votesg') as $row7);
        $totalvotesg = $row7['COUNT(grno)'];
        foreach ($mysqli->query('SELECT COUNT(grno) FROM votesb') as $row8);
        $totalvotesb = $row8['COUNT(grno)'];
        foreach ($mysqli->query('SELECT COUNT(grno) FROM votesh') as $row9);
        $totalvotesh = $row9['COUNT(grno)'];
        ////////////////////////////////////////////////////////////////////
        //red//////////////////////////////////////////////////////////////////////////////////////////////////////////////
        foreach ($mysqli->query('SELECT dvcb,COUNT(dvcb)  FROM votesr GROUP BY dvcb') as $row10) {
            if ($row10['COUNT(dvcb)'] > $rdvcbc) {
                $rdvcbc = $row10['COUNT(dvcb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'red' AND post = 'dvcb'") as $row0) {
                    if ($row10['dvcb'] == $row0['enc']) {
                        $rdvcb = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row10['COUNT(dvcb)'] == $rdvcbc){
                $rdvcb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT vcb,COUNT(vcb)  FROM votesr GROUP BY vcb') as $row11) {
            if ($row11['COUNT(vcb)'] > $rvcbc) {
                $rvcbc = $row11['COUNT(vcb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'red' AND post = 'vcb'") as $row0) {
                    if ($row11['vcb'] == $row0['enc']) {
                        $rvcb = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row11['COUNT(vcb)'] == $rvcbc) {
                $rvcb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT dvcg,COUNT(dvcg)  FROM votesr GROUP BY dvcg') as $row12) {
            if ($row12['COUNT(dvcg)'] > $rdvcgc) {
                $rdvcgc = $row12['COUNT(dvcg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'red' AND post = 'dvcg'") as $row0) {
                    if ($row12['dvcg'] == $row0['enc']) {
                        $rdvcg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row12['COUNT(dvcg)'] == $rdvcgc) {
                $rdvcg = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT vcg,COUNT(vcg)  FROM votesr GROUP BY vcg') as $row13) {
            if ($row13['COUNT(vcg)'] > $rvcgc) {
                $rvcgc = $row13['COUNT(vcg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'red' AND post = 'vcg'") as $row0) {
                    if ($row13['vcg'] == $row0['enc']) {
                        $rvcg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row13['COUNT(vcg)'] == $rvcgc) {
                $rvcg = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT dcb,COUNT(dcb)  FROM votesr GROUP BY dcb') as $row14) {
            if ($row14['COUNT(dcb)'] > $rdcbc) {
                $rdcbc = $row14['COUNT(dcb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'red' AND post = 'dcb'") as $row0) {
                    if ($row14['dcb'] == $row0['enc']) {
                        $rdcb = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row14['COUNT(dcb)'] == $rdcbc) {
                $rdcb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT dcg,COUNT(dcg)  FROM votesr GROUP BY dcg') as $row15) {
            if ($row15['COUNT(dcg)'] > $rdcgc) {
                $rdcgc = $row15['COUNT(dcg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'red' AND post = 'dcg'") as $row0) {
                    if ($row15['dcg'] == $row0['enc']) {
                        $rdcg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row15['COUNT(dcg)'] == $rdcgc) {
                $rdcg = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT cb,COUNT(cb)  FROM votesr GROUP BY cb') as $row16) {
            if ($row16['COUNT(cb)'] > $rcbc) {
                $rcbc = $row16['COUNT(cb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'red' AND post = 'cb'") as $row0) {
                    if ($row16['cb'] == $row0['enc']) {
                        $rcb = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row16['COUNT(cb)'] == $rcbc) {
                $rcb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT cg,COUNT(cg)  FROM votesr GROUP BY cg') as $row17) {
            if ($row17['COUNT(cg)'] > $rcgc) {
                $rcgc = $row17['COUNT(cg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'red' AND post = 'cg'") as $row0) {
                    if ($row17['cg'] == $row0['enc']) {
                        $rcg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row17['COUNT(cg)'] == $rcgc) {
                $rcg = 'Not Declarable';
            }
        }
        //yellow//////////////////////////////////////////////////////////////////////////////////////////////////////////////
        foreach ($mysqli->query('SELECT dvcb,COUNT(dvcb)  FROM votesy GROUP BY dvcb') as $row18) {
            if ($row18['COUNT(dvcb)'] > $ydvcbc) {
                $ydvcbc = $row18['COUNT(dvcb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'yellow' AND post = 'dvcb'") as $row0) {
                    if ($row18['dvcb'] == $row0['enc']) {
                        $ydvcb = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row18['COUNT(dvcb)'] == $ydvcbc) {
                $ydvcb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT vcb,COUNT(vcb)  FROM votesy GROUP BY vcb') as $row19) {
            if ($row19['COUNT(vcb)'] > $yvcbc) {
                $yvcbc = $row19['COUNT(vcb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'yellow' AND post = 'vcb'") as $row0) {
                    if ($row19['vcb'] == $row0['enc']) {
                        $yvcb = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row19['COUNT(vcb)'] == $yvcbc) {
                $yvcb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT dvcg,COUNT(dvcg)  FROM votesy GROUP BY dvcg') as $row20) {
            if ($row20['COUNT(dvcg)'] > $ydvcgc) {
                $ydvcgc = $row20['COUNT(dvcg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'yellow' AND post = 'dvcg'") as $row0) {
                    if ($row20['dvcg'] == $row0['enc']) {
                        $ydvcg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row20['COUNT(dvcg)'] == $ydvcgc) {
                $ydvcg = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT vcg,COUNT(vcg)  FROM votesy GROUP BY vcg') as $row21) {
            if ($row21['COUNT(vcg)'] > $yvcgc) {
                $yvcgc = $row21['COUNT(vcg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'yellow' AND post = 'vcg'") as $row0) {
                    if ($row21['vcg'] == $row0['enc']) {
                        $yvcg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row21['COUNT(vcg)'] == $yvcgc) {
                $yvcg = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT dcb,COUNT(dcb)  FROM votesy GROUP BY dcb') as $row22) {
            if ($row22['COUNT(dcb)'] > $ydcbc) {
                $ydcbc = $row22['COUNT(dcb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'yellow' AND post = 'dcb'") as $row0) {
                    if ($row22['dcb'] == $row0['enc']) {
                        $ydcb = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row22['COUNT(dcb)'] == $ydcbc) {
                $ydcb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT dcg,COUNT(dcg)  FROM votesy GROUP BY dcg') as $row23) {
            if ($row23['COUNT(dcg)'] > $ydcgc) {
                $ydcgc = $row23['COUNT(dcg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'yellow' AND post = 'dcg'") as $row0) {
                    if ($row23['dcg'] == $row0['enc']) {
                        $ydcg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row23['COUNT(dcg)'] == $ydcgc) {
                $ydcg = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT cb,COUNT(cb)  FROM votesy GROUP BY cb') as $row24) {
            if ($row24['COUNT(cb)'] > $ycbc) {
                $ycbc = $row24['COUNT(cb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'yellow' AND post = 'cb'") as $row0) {
                    if ($row24['cb'] == $row0['enc']) {
                        $ycb = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row24['COUNT(cb)'] == $ycbc) {
                $ycb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT cg,COUNT(cg)  FROM votesy GROUP BY cg') as $row25) {
            if ($row25['COUNT(cg)'] > $ycgc) {
                $ycgc = $row25['COUNT(cg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'yellow' AND post = 'cg'") as $row0) {
                    if ($row25['cg'] == $row0['enc']) {
                        $ycg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row25['COUNT(cg)'] == $ycgc) {
                $ycg = 'Not Declarable';
            }
        }
        //green//////////////////////////////////////////////////////////////////////////////////////////////////////////////
        foreach ($mysqli->query('SELECT dvcb,COUNT(dvcb)  FROM votesg GROUP BY dvcb') as $row26) {
            if ($row26['COUNT(dvcb)'] > $gdvcbc) {
                $gdvcbc = $row26['COUNT(dvcb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'green' AND post = 'dvcb'") as $row0) {
                    if ($row26['dvcb'] == $row0['enc']) {
                        $gdvcb = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row26['COUNT(dvcb)'] == $gdvcbc) {
                $gdvcb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT vcb,COUNT(vcb)  FROM votesg GROUP BY vcb') as $row27) {
            if ($row27['COUNT(vcb)'] > $gvcbc) {
                $gvcbc = $row27['COUNT(vcb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'green' AND post = 'vcb'") as $row0) {
                    if ($row27['vcb'] == $row0['enc']) {
                        $gvcb = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row27['COUNT(vcb)'] == $gvcbc) {
                $gvcb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT dvcg,COUNT(dvcg)  FROM votesg GROUP BY dvcg') as $row28) {
            if ($row28['COUNT(dvcg)'] > $gdvcgc) {
                $gdvcgc = $row28['COUNT(dvcg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'green' AND post = 'dvcg'") as $row0) {
                    if ($row28['dvcg'] == $row0['enc']) {
                        $gdvcg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row28['COUNT(dvcg)'] == $gdvcgc) {
                $gdvcg = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT vcg,COUNT(vcg)  FROM votesg GROUP BY vcg') as $row29) {
            if ($row29['COUNT(vcg)'] > $gvcgc) {
                $gvcgc = $row29['COUNT(vcg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'green' AND post = 'vcg'") as $row0) {
                    if ($row29['vcg'] == $row0['enc']) {
                        $gvcg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row29['COUNT(vcg)'] == $gvcgc) {
                $gvcg = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT dcb,COUNT(dcb)  FROM votesg GROUP BY dcb') as $row30) {
            if ($row30['COUNT(dcb)'] > $gdcbc) {
                $gdcbc = $row30['COUNT(dcb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'green' AND post = 'dcb'") as $row0) {
                    if ($row30['dcb'] == $row0['enc']) {
                        $gdcb = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row30['COUNT(dcb)'] == $gdcbc) {
                $gdcb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT dcg,COUNT(dcg)  FROM votesg GROUP BY dcg') as $row31) {
            if ($row31['COUNT(dcg)'] > $gdcgc) {
                $gdcgc = $row31['COUNT(dcg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'green' AND post = 'dcg'") as $row0) {
                    if ($row31['dcg'] == $row0['enc']) {
                        $gdcg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row31['COUNT(dcg)'] == $gdcgc) {
                $gdcg = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT cb,COUNT(cb)  FROM votesg GROUP BY cb') as $row32) {
            if ($row32['COUNT(cb)'] > $gcbc) {
                $gcbc = $row32['COUNT(cb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'green' AND post = 'cb'") as $row0) {
                    if ($row32['cb'] == $row0['enc']) {
                        $gcb = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row32['COUNT(cb)'] == $gcbc) {
                $gcb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT cg,COUNT(cg)  FROM votesg GROUP BY cg') as $row33) {
            if ($row33['COUNT(cg)'] > $gcgc) {
                $gcgc = $row33['COUNT(cg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'green' AND post = 'cg'") as $row0) {
                    if ($row33['cg'] == $row0['enc']) {
                        $gcg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row33['COUNT(cg)'] == $gcgc) {
                $gcg = 'Not Declarable';
            }
        }
        //blue//////////////////////////////////////////////////////////////////////////////////////////////////////////////
        foreach ($mysqli->query('SELECT dvcb,COUNT(dvcb)  FROM votesb GROUP BY dvcb') as $row34) {
            if ($row34['COUNT(dvcb)'] > $bdvcbc) {
                $bdvcbc = $row34['COUNT(dvcb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'blue' AND post = 'dvcb'") as $row0) {
                    if ($row34['dvcb'] == $row0['enc']) {
                        $bdvcb = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row34['COUNT(dvcb)'] == $bdvcbc) {
                $bdvcb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT vcb,COUNT(vcb)  FROM votesb GROUP BY vcb') as $row35) {
            if ($row35['COUNT(vcb)'] > $bvcbc) {
                $bvcbc = $row35['COUNT(vcb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'blue' AND post = 'vcb'") as $row0) {
                    if ($row35['vcb'] == $row0['enc']) {
                        $bvcb = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row35['COUNT(vcb)'] == $bvcbc) {
                $bvcb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT dvcg,COUNT(dvcg)  FROM votesb GROUP BY dvcg') as $row36) {
            if ($row36['COUNT(dvcg)'] > $bdvcgc) {
                $bdvcgc = $row36['COUNT(dvcg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'blue' AND post = 'dvcg'") as $row0) {
                    if ($row36['dvcg'] == $row0['enc']) {
                        $bdvcg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row36['COUNT(dvcg)'] == $bdvcgc) {
                $bdvcg = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT vcg,COUNT(vcg)  FROM votesb GROUP BY vcg') as $row37) {
            if ($row37['COUNT(vcg)'] > $bvcgc) {
                $bvcgc = $row37['COUNT(vcg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'blue' AND post = 'vcg'") as $row0) {
                    if ($row37['vcg'] == $row0['enc']) {
                        $bvcg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row37['COUNT(vcg)'] == $bvcgc) {
                $bvcg = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT dcb,COUNT(dcb)  FROM votesb GROUP BY dcb') as $row38) {
            if ($row38['COUNT(dcb)'] > $bdcbc) {
                $bdcbc = $row38['COUNT(dcb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'blue' AND post = 'dcb'") as $row0) {
                    if ($row38['dcb'] == $row0['enc']) {
                        $bdcb = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row38['COUNT(dcb)'] == $bdcbc) {
                $bdcb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT dcg,COUNT(dcg)  FROM votesb GROUP BY dcg') as $row39) {
            if ($row39['COUNT(dcg)'] > $bdcgc) {
                $bdcgc = $row39['COUNT(dcg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'blue' AND post = 'dcg'") as $row0) {
                    if ($row39['dcg'] == $row0['enc']) {
                        $bdcg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row39['COUNT(dcg)'] == $bdcgc) {
                $bdcg = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT cb,COUNT(cb)  FROM votesb GROUP BY cb') as $row40) {
            if ($row40['COUNT(cb)'] > $bcbc) {
                $bcbc = $row40['COUNT(cb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'blue' AND post = 'cb'") as $row0) {
                    if ($row40['cb'] == $row0['enc']) {
                        $bcb = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row40['COUNT(cb)'] == $bcbc) {
                $bcb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT cg,COUNT(cg)  FROM votesb GROUP BY cg') as $row41) {
            if ($row41['COUNT(cg)'] > $bcgc) {
                $bcgc = $row41['COUNT(cg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'blue' AND post = 'cg'") as $row0) {
                    if ($row41['cg'] == $row0['enc']) {
                        $bcg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row41['COUNT(cg)'] == $bcgc) {
                $bcg = 'Not Declarable';
            }
        }
        //head council//////////////////////////////////////////////////////////////////////////////////////////////////////    
        foreach ($mysqli->query('SELECT prcb,COUNT(prcb)  FROM votesh GROUP BY prcb') as $row42) {
            if ($row42['COUNT(prcb)'] > $prcbc) {
                $prcbc = $row42['COUNT(prcb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'head council' AND post = 'prcb'") as $row0) {
                    if ($row42['prcb'] == $row0['enc']) {
                        $prcb = $row0['name'];
                        break;
                    }
                }
            }
            else if ($row42['COUNT(prcb)'] == $prcbc) {
                $prcb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT prcg,COUNT(prcg)  FROM votesh GROUP BY prcg') as $row43) {
            if ($row43['COUNT(prcg)'] > $prcgc) {
                $prcgc = $row43['COUNT(prcg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'head council' AND post = 'prcg'") as $row0) {
                    if ($row43['prcg'] == $row0['enc']) {
                        $prcg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row43['COUNT(prcg)'] == $prcgc) {
                $prcg = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT ccb,COUNT(ccb)  FROM votesh GROUP BY ccb') as $row44) {
            if ($row44['COUNT(ccb)'] > $ccbc) {
                $ccbc = $row44['COUNT(ccb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'head council' AND post = 'ccb'") as $row0) {
                    if ($row44['ccb'] == $row0['enc']) {
                        $ccb = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row44['COUNT(ccb)'] == $ccbc) {
                $ccb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT ccg,COUNT(ccg)  FROM votesh GROUP BY ccg') as $row45) {
            if ($row45['COUNT(ccg)'] > $ccgc) {
                $ccgc = $row45['COUNT(ccg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'head council' AND post = 'ccg'") as $row0) {
                    if ($row45['ccg'] == $row0['enc']) {
                        $ccg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row45['COUNT(ccg)'] == $ccgc) {
                $ccg = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT scb,COUNT(scb)  FROM votesh GROUP BY scb') as $row46) {
            if ($row46['COUNT(scb)'] > $scbc) {
                $scbc = $row46['COUNT(scb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'head council' AND post = 'scb'") as $row0) {
                    if ($row46['scb'] == $row0['enc']) {
                        $scb = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row46['COUNT(scb)'] == $scbc) {
                $scb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT scg,COUNT(scg)  FROM votesh GROUP BY scg') as $row47) {
            if ($row47['COUNT(scg)'] > $scgc) {
                $scgc = $row47['COUNT(scg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'head council' AND post = 'scg'") as $row0) {
                    if ($row47['scg'] == $row0['enc']) {
                        $scg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row47['COUNT(scg)'] == $scgc) {
                $scg = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT dhb,COUNT(dhb)  FROM votesh GROUP BY dhb') as $row48) {
            if ($row48['COUNT(dhb)'] > $dhbc) {
                $dhbc = $row48['COUNT(dhb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'head council' AND post = 'dhb'") as $row0) {
                    if ($row48['dhb'] == $row0['enc']) {
                        $dhb = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row48['COUNT(dhb)'] == $dhbc) {
                $dhb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT dhg,COUNT(dhg)  FROM votesh GROUP BY dhg') as $row49) {
            if ($row49['COUNT(dhg)'] > $dhgc) {
                $dhgc = $row49['COUNT(dhg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'head council' AND post = 'dhg'") as $row0) {
                    if ($row49['dhg'] == $row0['enc']) {
                        $dhg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row49['COUNT(dhg)'] == $dhgc) {
                $dhg = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT hb,COUNT(hb)  FROM votesh GROUP BY hb') as $row50) {
            if ($row50['COUNT(hb)'] > $hbc) {
                $hbc = $row50['COUNT(hb)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'head council' AND post = 'hb'") as $row0) {
                    if ($row50['hb'] == $row0['enc']) {
                        $hb = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row50['COUNT(hb)'] == $hbc) {
                $hb = 'Not Declarable';
            }
        }
        foreach ($mysqli->query('SELECT hg,COUNT(hg)  FROM votesh GROUP BY hg') as $row51) {
            if ($row51['COUNT(hg)'] > $hgc) {
                $hgc = $row51['COUNT(hg)'];
                foreach ($mysqli->query("SELECT enc,name FROM candidates WHERE house = 'head council' AND post = 'hg'") as $row0) {
                    if ($row51['hg'] == $row0['enc']) {
                        $hg = $row0['name'];
                        break;
                    }
                }
            }
            elseif ($row51['COUNT(hg)'] == $hgc) {
                $hg = 'Not Declarable';
            }
        }
        ?>