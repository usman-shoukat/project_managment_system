import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { CommonServiceService } from '../../common-service.service';
import { ToastrService } from 'ngx-toastr';

@Component({
  selector: 'app-service-details',
  templateUrl: './service-details.component.html',
  styleUrls: ['./service-details.component.css'],
})
export class ServiceDetailsComponent implements OnInit {
  id;
  doctorDetails;
  services;
  constructor(
    public commonService: CommonServiceService,
    private route: ActivatedRoute,
    private toastr: ToastrService
  ) {}

  ngOnInit(): void {
    window.scrollTo(0, 0);
    this.id = this.route.snapshot.queryParams['id'];
    this.getServices();
  }
  slides = [
    {
      id: 1,
      img: 'assets/img/services/service-02.jpg',
    },
    {
      id: 2,
      img: 'assets/img/services/service-03.jpg',
    },
    {
      id: 3,
      img: 'assets/img/services/service-04.jpg',
    },
  ];
  slideConfig = {
    dots: true,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  };

  slideConfiguration = {
    dots: true,
    arrows: false,
    slidesToShow: 2,
    slidesToScroll: 2,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  };

  getServices() {
    this.commonService.getServices().subscribe((res) => {
      this.services = res;
    });
  }

  gotoTop() {
    window.scroll(0,0)
  }
}
