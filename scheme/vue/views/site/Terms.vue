<template>
  <div class="Terms">
    <loading
      :active.sync="isLoading"
      :can-cancel="true"
      :on-cancel="onCancel"
      :color="color"
      :is-full-page="fullPage"
    ></loading>
    <clientHeader />
    <div class="all-content">
      <div class="intro">
        <div class="intro-content">
          <div class="intro-body">
            <h2
              data-aos="fade-up"
              data-aos-duration="1000"
              class="intro-header"
            >
              Terms and Conditions
            </h2>
            <p
              class="txt-shad-sm intro-desc"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              Maken Africa Safaris Terms and Conditions
            </p>
          </div>
        </div>
      </div>
      <div class="Terms-content">
        <div class="Terms-item">
          <div class="my-title">
            Booking and Reservation terms and conditions
          </div>
          <hr class="myhr" />
          <div class="Terms-body">
            <p>
              Before making a reservation at
              <strong>Maken africa safaris</strong> we encourage you to read
              these Terms and Conditions carefully, as they constitute a
              contract agreement between us and you from the time the booking is
              made. The person who makes the booking accepts these conditions on
              behalf of all the people in the group and is responsible for all
              payments due.
            </p>

            <p>
              By submitting a booking you confirm to us that you comply with
              these arrangements.Once you have submitted your booking and
              personal details via <strong>www.makenafricasafaris.com</strong>,
              you will receive a confirmation and pro-forma invoice of your
              booking via e-mail. Please note that all online bookings require
              payment of 50% of the total package price at the time of the
              booking. If the total price is less than 500 USD or booking occurs
              less than 30 days before your arrival date full payment is
              required.
            </p>
            <p>
              If you prefer to pay for your booking with a bank transfer, please
              contact
              <strong>Maken africa safaris</strong>
              <router-link to="/contact">here</router-link>
              and send us all the information regarding the booking, name of the
              tour, type of car, accommodation and arrival date. Most of the
              bookings are confirmed instantly; however, packages that include
              overnight accommodation may take a bit longer. One of our sales
              representatives will contact you not later than two business days
              (48 hours) to re-confirm the booking.
            </p>
            <p>
              The travel documents will be delivered to you once the full
              payment has been received. You will receive your travel documents:
              vouchers and itinerary via email.
            </p>
            <p>
              Please print out these documents, as you will need to show them
              for all services during your visit.
            </p>
            <p>
              If by any chance our travel consultant is unable to obtain
              confirmation (accommodation is not available) an alternative will
              be offered by <strong>Maken africa safaris</strong> but on the
              same level with the previous confirmation item.
            </p>
            <p>
              Booking services with <strong>Maken africa safaris</strong> are
              available only to persons aged 18 years and above. By submitting a
              booking, you warrant and confirm to us that you comply with these
              arrangements.
            </p>
          </div>
        </div>
        <div class="Terms-item">
          <div class="my-title">SUBSCRIPTION AND CANCELLATION POLICY</div>
          <hr class="myhr" />
          <div class="Terms-body">
            <p>
              You are the one to subscribe and who will renew your
              subscription, when your existing subscription expires we wait
              until you come back for the new subscription.
            </p>
          </div>
        </div>
        <div class="Terms-item">
          <div class="my-title">TERMS OF PAYMENT</div>
          <hr class="myhr" />
          <div class="Terms-body">
            <p>
              Please note that all online bookings require payment of atleast
              <strong>40%</strong> of the total package price at the time of the
              booking. If the total price is less than
              <strong>1000 USD</strong> or booking occurs less than
              <strong>15 days</strong> before your arrival date full payment is
              required.
            </p>
            <p>
              You will be informed by email when you need to pay the balance of
              your booking which is <strong>15 days</strong> before your
              departure date. We accept all major credit cards: Visa, MasterCard
              and American Express(mobile money).
            </p>
            <p>
              If you prefer to pay for your booking with a bank transfer, please
              contact us <router-link to="/contact">here</router-link> and send
              us all the information regarding the booking, name of the tour,
              type of car, accommodation and arrival date.
            </p>

            <p>
              There is a service fee for processing Visa or MasterCard payments
              and American Express(mobile money) card but a service fee of
              <strong>3.9%</strong> applies and will be added to the final
              invoice of the client.
            </p>
            <p>
              All Prices quoted on <strong>Maken africa safaris</strong> are in
              <strong>USD, RWF</strong> based on the current market rate for all
              Internationals and Domestic Tourists and per person, unless
              otherwise specified. All payments and refunds are due to the
              Mentioned currency. <strong>Maken africa safaris</strong> is not
              responsible for any changes in currency exchange rates that might
              occur from the time of booking until a refund is made.
            </p>
          </div>
        </div>
        <div class="Terms-item">
          <div class="my-title">VALIDITY OF PRICES</div>
          <hr class="myhr" />
          <div class="Terms-body">
            <p>
              All rates quoted or shown in our tariffs are based on current
              prices. All prices mentioned on this site include value-added tax.
              <strong>Maken africa safaris</strong> reserves the right to alter
              or change already published prices on the website without notice
              in the event of currency fluctuation, government taxes, or any
              such cost increases that are outside
              <strong>Maken africa safaris</strong> control.
            </p>
            <p>
              <strong>Maken africa safaris</strong> reserves the right to alter
              routes, itineraries or departure times without prior notice should
              this be necessary due to weather or other reasons that are beyond
              <strong>Maken africa safaris</strong> control. Please notice that
              in the case of changes of flights, the passenger is responsible
              for any additional costs that become payable as a result of such
              changes.
            </p>
            <p>
              If a day tour, package or group tour is cancelled due to
              circumstances outside our control or minimum numbers are not
              reached, we will refund the money you have paid.
              <strong>Maken africa safaris</strong> shall then have no further
              liability towards you.
            </p>
          </div>
        </div>
        <div class="Terms-item">
          <div class="my-title">CANCELLATION TERMS</div>
          <hr class="myhr" />
          <div class="Terms-body">
            <span>Cancellation of packages.</span>
            <p>
              For cancellations received up to 30 calendar days before the
              scheduled departure, a 20% cancellation fee will be charged.
            </p>
            <p>
              For cancellations received 15 - 29 calendar days before the
              scheduled departure date a 60% cancellation fee will be charged.
            </p>
            <p>
              For cancellations received 7 - 14 calendar days before the
              scheduled departure date a 80% cancellation fee will be charged.
            </p>
            <p>
              For cancellations received within 7 calendar days before the
              scheduled departure date a 100% cancellation fee will be charged.
            </p>
            <span>Cancellation of day-tours.</span>
            <p>
              For cancellations received at least 7 calendar days before the
              scheduled departure there is no cancellation fee.
            </p>
            <p>
              For cancellations received 3 - 6 calendar days before the
              scheduled departure a 50% cancellation fee will be charged.
            </p>
            <p>
              For cancellations received within 2 calendar days before the
              scheduled departure a 100% cancellation fee will be charged.
            </p>
            <p>
              If you need to make a change to your holiday arrangement you must
              send us a notification via email at least 4 weeks before
              departure. For changes we charge up to 50 USD per person.
            </p>
            <p>
              However the suppliers upgrade their prices,
              <strong>Maken africa safaris</strong> will be aware of that.
            </p>
          </div>
        </div>
        <div class="Terms-item">
          <div class="my-title">LIABILITY</div>
          <hr class="myhr" />
          <div class="Terms-body">
            <p>
              Once you book through
              <strong>www.makenafricasafris.com</strong> you agree to be legally
              bound by the following terms.
            </p>
            <p>
              <strong>Maken africa safaris</strong> acts in good faith and
              cannot be held to be responsible for any loss, damage, accidents,
              sickness or schedule changes caused by weather or road conditions,
              force majeure such as natural catastrophes, strikes or any other
              irregularities beyond the control of
              <strong>Maken africa safaris</strong>
            </p>
            <p>
              Luggage is at the owner's risk throughout the tour. We therefore
              advise all clients to have insurance cover, as clients are at
              their own risk on optional tours
            </p>
            <p>
              All information on <strong>Maken africa safaris</strong> is
              subject to change and we reserve the right to correct any mistakes
              that may appear on our website. These general booking conditions
              are subject to change and we reserve the right to update these
              conditions without notice.
            </p>
          </div>
        </div>
        <div class="Terms-item">
          <div class="my-title">COMPLAINS</div>
          <hr class="myhr" />
          <div class="Terms-body">
            <p>
              Our main goal is to provide you with excellent service .if you,
              for any reason, are not satisfied with your holiday package, we
              would like to hear about it. We recommend you to contact us as
              soon as any incident occurs. All complaints must reach
              <strong>Maken africa safaris</strong> within 10 days after your
              departure from Rwanda. Otherwise, any possible compensation
              entitlement will not be valid.
            </p>
          </div>
        </div>
        <div class="Terms-item">
          <div class="my-title">INSURANCE</div>
          <hr class="myhr" />
          <div class="Terms-body">
            <p>
              Please note that individual travel insurance is not included in
              the tour price and all medical costs or any other costs involved
              must be paid by the client. It is therefore strongly recommended
              that participants take out personal insurance, especially for the
              active tours.
            </p>
          </div>
        </div>
      </div>
    </div>
    <clientFooter />
  </div>
</template>

<script>
export default {
  name: "Terms",
  data() {
    return {
      isLoading: false,
      color: "#072e4d",
      fullPage: true,
      partnersSettings: {
        itemsToShow: 2,
        centerMode: false,
        autoPlay: true,
        wheelControl: false,
        trimWhiteSpace: true,
        infiniteScroll: true,
        playSpeed: 4000,
        transition: 1000,
        hoverPause: false,
        breakpoints: {
          400: {
            itemsToShow: 3,
          },
          800: {
            itemsToShow: 4,
          },
          1300: {
            itemsToShow: 5,
          },
          1600: {
            itemsToShow: 6,
          },
        },
      },
    };
  },
  methods: {
    onCancel() {
      console.log();
    },
  },
  mounted() {
    let vm = this;
  },
};
</script>

<style lang="scss">
$orange: #ef6203;
$green: #044914;
.Terms {
  width: 99.1vw;
  overflow: hidden;
  @media screen and (max-width: 900px) {
    width: 100vw;
  }
  .Terms-content {
    padding: 2rem 15rem;
    @media screen and (max-width: 1700px) {
      padding: 4rem 10rem;
    }
    @media screen and (max-width: 1300px) {
      padding: 3rem 5rem;
    }
    @media screen and (max-width: 900px) {
      padding: 2rem;
      font-size: 0.75rem;
    }
    label {
      font-weight: 600;
      font-size: 1.25rem;
      line-height: 3rem;
      @media screen and (max-width: 900px) {
        line-height: 2rem;
        font-size: 1rem;
      }
    }
    .Terms-body p{
      font-size: .9rem;
    }
    .Terms-body strong {
      color: $green;
    }
    .Terms-body span {
      color: $green;
      font-size: 1.2rem;
      line-height: 1.5;
      font-weight: 600;
    }
    .Terms-body a {
      color: $orange;
    }
  }
}
</style>
