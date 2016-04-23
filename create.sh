#!/bin/bash
meme=$1
caption=$3
out=$2
width=`identify -format %w ${meme}`
height=`identify -format %w ${meme}`
convert -background "rgba(0,0,0,0)" -fill white -stroke black -strokewidth 2 -font impact -gravity south -pointsize 64 -size ${width}x${heigth} caption:"$caption" ${meme} +swap -gravity south -composite $out
