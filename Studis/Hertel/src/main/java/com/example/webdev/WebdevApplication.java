package com.example.webdev;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.web.context.support.AnnotationConfigWebApplicationContext;

@SpringBootApplication
public class WebdevApplication {

    public static void main(String[] args) {
        AnnotationConfigWebApplicationContext ctx = new AnnotationConfigWebApplicationContext();
        ctx.register(SecurityConfig.class);
        ctx.refresh();
        SpringApplication.run(WebdevApplication.class, args);
    }

}
