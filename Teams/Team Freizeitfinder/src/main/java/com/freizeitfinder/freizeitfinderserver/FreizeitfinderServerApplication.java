package com.freizeitfinder.freizeitfinderserver;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.data.jpa.repository.config.EnableJpaAuditing;

@SpringBootApplication
@EnableJpaAuditing
public class FreizeitfinderServerApplication  {

    public static void main(String[] args) {

        SpringApplication.run(FreizeitfinderServerApplication.class, args);
    }
}
