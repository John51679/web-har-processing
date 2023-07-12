# Web har processing
This project was implemented as part of "Programming in the World Web" project in the Computer Engineering & Informatics Department of University of Patras.

In the current project we were tasked to create a fully operational back-end and front-end part for the processing of HAR (HTTP Archive format) files.
More specificaly, each user has to register and later login with their credentials. Then they are able to either process and upload a HAR file, or process and re-download the processed HAR file.
In the processing part, we filter out any private information keeping only the appropriate information. Each user can also view their profiles and make changes if they deem it necessary.

There also exists admin users that can see several infographics in the form of heatmaps, tables and graphs.

The back-end was created using `php`. For the data base `phpMyAdmin` was used, and the overall connection was established using `WampServer`.

The front-end was created using `JavaScript` using `ajax` in parts where we had to communicate with the data base
